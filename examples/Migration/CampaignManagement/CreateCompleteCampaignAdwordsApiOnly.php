<?php
/**
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Ads\GoogleAds\Examples\Migration\CampaignManagement;

require __DIR__ . '/../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\v201809\cm\AdGroup;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdRotationMode;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupStatus;
use Google\AdsApi\AdWords\v201809\cm\AdRotationMode;
use Google\AdsApi\AdWords\v201809\cm\AdvertisingChannelType;
use Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201809\cm\BiddingStrategyType;
use Google\AdsApi\AdWords\v201809\cm\Budget;
use Google\AdsApi\AdWords\v201809\cm\BudgetBudgetDeliveryMethod;
use Google\AdsApi\AdWords\v201809\cm\BudgetOperation;
use Google\AdsApi\AdWords\v201809\cm\BudgetService;
use Google\AdsApi\AdWords\v201809\cm\Campaign;
use Google\AdsApi\AdWords\v201809\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201809\cm\CampaignService;
use Google\AdsApi\AdWords\v201809\cm\CampaignStatus;
use Google\AdsApi\AdWords\v201809\cm\CpcBid;
use Google\AdsApi\AdWords\v201809\cm\ExpandedTextAd;
use Google\AdsApi\AdWords\v201809\cm\Keyword;
use Google\AdsApi\AdWords\v201809\cm\KeywordMatchType;
use Google\AdsApi\AdWords\v201809\cm\Money;
use Google\AdsApi\AdWords\v201809\cm\NetworkSetting;
use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\AdWords\v201809\cm\UrlList;
use Google\AdsApi\AdWords\v201809\cm\UserStatus;

/**
 * This code example is the first in a series of code examples that shows how to create
 * a Search campaign using the AdWords API, and then migrate it to Google Ads API one
 * functionality at a time. See other examples in this directory for code examples in various
 * stages of migration.
 *
 * This code example represents the initial state, where the AdWords API is used to create a
 * campaign budget, a Search campaign, ad groups, keywords and expanded text ads. None of the
 * functionality has yet been migrated to the Google Ads API.
 */
class CreateCompleteCampaignAdWordsApiOnly
{
    // Number of ads being added/updated in this code example.
    private const NUMBER_OF_ADS = 5;
    // The list of keywords being added in this code example.
    private const KEYWORDS_TO_ADD = [
        "mars cruise",
        "space hotel"
    ];

    /**
     * Runs the CreateCompleteCampaignGoogleAdsApiOnly example.
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $adWordsSession the AdWords session
     */
    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $adWordsSession
    ) {
        $campaignBudget = self::createCampaignBudget($adWordsServices, $adWordsSession);
        $campaign =
            self::createCampaign($adWordsServices, $adWordsSession, $campaignBudget->getBudgetId());
        $adGroup = self::createAdGroup($adWordsServices, $adWordsSession, $campaign->getId());
        self::createTextAds($adWordsServices, $adWordsSession, $adGroup->getId());
        self::createKeywords(
            $adWordsServices,
            $adWordsSession,
            $adGroup->getId(),
            self::KEYWORDS_TO_ADD
        );
    }

    /**
     * Creates a campaign budget.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $adWordsSession the AdWords session
     * @return Budget the newly created campaign budget
     */
    private static function createCampaignBudget(
        AdWordsServices $adWordsServices,
        AdWordsSession $adWordsSession
    ) {
        /** @var BudgetService $budgetService */
        $budgetService = $adWordsServices->get($adWordsSession, BudgetService::class);

        // Creates a budget.
        $budget = new Budget();
        $budget->setName('Interplanetary Cruise Budget #' . uniqid());
        $budgetAmount = new Money();
        $budgetAmount->setMicroAmount(500000);
        $budget->setAmount($budgetAmount);
        $budget->setDeliveryMethod(BudgetBudgetDeliveryMethod::STANDARD);

        // Creates a budget operation.
        $budgetOperation = new BudgetOperation();
        $budgetOperation->setOperand($budget);
        $budgetOperation->setOperator(Operator::ADD);

        // Create the budget on the server and print its information.
        $result = $budgetService->mutate([$budgetOperation]);
        $createdBudget = $result->getValue()[0];
        printf(
            "Budget with ID %d and name '%s' was created.%s",
            $createdBudget->getBudgetId(),
            $createdBudget->getName(),
            PHP_EOL
        );

        return $createdBudget;
    }

    /**
     * Creates a campaign.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $adWordsSession the AdWords session
     * @param int $budgetId the campaign budget ID
     * @return Campaign the newly created campaign
     */
    private static function createCampaign(
        AdWordsServices $adWordsServices,
        AdWordsSession $adWordsSession,
        int $budgetId
    ) {
        /** @var CampaignService $campaignService */
        $campaignService = $adWordsServices->get($adWordsSession, CampaignService::class);

        // Create a campaign.
        $campaign = new Campaign();
        $campaign->setName('Interplanetary Cruise #' . uniqid());
        $campaign->setAdvertisingChannelType(AdvertisingChannelType::SEARCH);
        // Recommendation: Set the campaign to PAUSED when creating it to stop
        // the ads from immediately serving. Set to ENABLED once you've added
        // targeting and the ads are ready to serve.
        $campaign->setStatus(CampaignStatus::PAUSED);

        // Set bidding strategy.
        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->setBiddingStrategyType(
            BiddingStrategyType::MANUAL_CPC
        );
        $campaign->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

        // Set the budget.
        $campaign->setBudget(new Budget());
        $campaign->getBudget()->setBudgetId($budgetId);

        // Set the campaign network options.
        $networkSetting = new NetworkSetting();
        $networkSetting->setTargetGoogleSearch(true);
        $networkSetting->setTargetSearchNetwork(true);
        $campaign->setNetworkSetting($networkSetting);

        // Optional: Set the start and end dates.
        $campaign->setStartDate(date('Ymd', strtotime('+1 day')));
        $campaign->setEndDate(date('Ymd', strtotime('+1 year')));

        // Create a campaign operation.
        $operation = new CampaignOperation();
        $operation->setOperand($campaign);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;

        // Create the campaign on the server and print out its information.
        $result = $campaignService->mutate([$operation]);
        $createdCampaign = $result->getValue()[0];
        printf(
            "Campaign with ID %d and name '%s' was created.%s",
            $createdCampaign->getId(),
            $createdCampaign->getName(),
            PHP_EOL
        );

        return $createdCampaign;
    }

    /**
     * Creates an ad group.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $adWordsSession the AdWords session
     * @param int $campaignId the campaign ID
     * @return AdGroup the newly created ad group
     */
    private static function createAdGroup(
        AdWordsServices $adWordsServices,
        AdWordsSession $adWordsSession,
        int $campaignId
    ) {
        /** @var AdGroupService $adGroupService */
        $adGroupService = $adWordsServices->get($adWordsSession, AdGroupService::class);

        // Create an ad group.
        $adGroup = new AdGroup();
        $adGroup->setCampaignId($campaignId);
        $adGroup->setName('Earth to Mars Cruise #' . uniqid());

        // Set ad group bids.
        $bid = new CpcBid();
        $money = new Money();
        $money->setMicroAmount(10000000);
        $bid->setBid($money);
        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->setBids([$bid]);
        $adGroup->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

        // Optional: Set the rotation mode.
        $rotationMode = new AdGroupAdRotationMode(AdRotationMode::OPTIMIZE);
        $adGroup->setAdGroupAdRotationMode($rotationMode);

        $adGroup->setStatus(AdGroupStatus::ENABLED);

        // Create an ad group operation.
        $operation = new AdGroupOperation();
        $operation->setOperand($adGroup);
        $operation->setOperator(Operator::ADD);

        // Create the ad group on the server and print out its information.
        $result = $adGroupService->mutate([$operation]);
        $createdAdGroup = $result->getValue()[0];
        printf(
            "Ad group with ID %d and name '%s' was created.%s",
            $createdAdGroup->getId(),
            $createdAdGroup->getName(),
            PHP_EOL
        );

        return $createdAdGroup;
    }

    /**
     * Creates text ads.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $adWordsSession the AdWords session
     * @param int $adGroupId the ad group ID
     */
    private static function createTextAds(
        AdWordsServices $adWordsServices,
        AdWordsSession $adWordsSession,
        int $adGroupId
    ) {
        /** @var AdGroupAdService $adGroupAdService */
        $adGroupAdService = $adWordsServices->get($adWordsSession, AdGroupAdService::class);

        $operations = [];

        for ($i = 0; $i < self::NUMBER_OF_ADS; $i++) {
            // Create an expanded text ad.
            $expandedTextAd = new ExpandedTextAd();
            $expandedTextAd->setHeadlinePart1('Cruise #' . uniqid() . ' to Mars');
            $expandedTextAd->setHeadlinePart2('Best Space Cruise Line');
            $expandedTextAd->setHeadlinePart3('For Your Loved Ones');
            $expandedTextAd->setDescription('Buy your tickets now!');
            $expandedTextAd->setDescription2('Discount ends soon');
            $expandedTextAd->setFinalUrls(['http://www.example.com']);

            // Create ad group ad.
            $adGroupAd = new AdGroupAd();
            $adGroupAd->setAdGroupId($adGroupId);
            $adGroupAd->setAd($expandedTextAd);

            // Optional: Set additional settings.
            $adGroupAd->setStatus(AdGroupAdStatus::PAUSED);

            // Create ad group ad operation and add it to the list.
            $operation = new AdGroupAdOperation();
            $operation->setOperand($adGroupAd);
            $operation->setOperator(Operator::ADD);
            $operations[] = $operation;
        }

        // Create the ad group ads on the server and print out their information.
        $result = $adGroupAdService->mutate($operations);
        foreach ($result->getValue() as $adGroupAd) {
            /** @var ExpandedTextAd $ad */
            $ad = $adGroupAd->getAd();
            printf(
                "Expanded text ad with ID %d and headline '%s - %s%s'"
                . " was created.%s",
                $ad->getId(),
                $ad->getHeadlinePart1(),
                $ad->getHeadlinePart2(),
                $ad->getHeadlinePart3()  ? ' - ' . $ad->getHeadlinePart3() : '',
                PHP_EOL
            );
        }
    }

    /**
     * Creates keywords.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $adWordsSession the AdWords session
     * @param int $adGroupId the ad group ID
     * @param string[] $keywordsToAdd
     */
    private static function createKeywords(
        AdWordsServices $adWordsServices,
        AdWordsSession $adWordsSession,
        int $adGroupId,
        array $keywordsToAdd
    ) {
        /** @var AdGroupCriterionService $adGroupCriterionService */
        $adGroupCriterionService =
            $adWordsServices->get($adWordsSession, AdGroupCriterionService::class);

        $operations = [];

        foreach ($keywordsToAdd as $keywordText) {
            // Create a keyword.
            $keyword = new Keyword();
            $keyword->setText($keywordText);
            $keyword->setMatchType(KeywordMatchType::BROAD);

            // Create a biddable ad group criterion.
            $adGroupCriterion = new BiddableAdGroupCriterion();
            $adGroupCriterion->setAdGroupId($adGroupId);
            $adGroupCriterion->setCriterion($keyword);

            // Optional: Set the user status.
            $adGroupCriterion->setUserStatus(UserStatus::PAUSED);
            // Optional: Set the keyword destination url.
            $adGroupCriterion->setFinalUrls(
                new UrlList(['http://www.example.com/mars/cruise/?kw=' . urlencode($keywordText)])
            );

            // Create an ad group criterion operation and add it to the list.
            $operation = new AdGroupCriterionOperation();
            $operation->setOperand($adGroupCriterion);
            $operation->setOperator(Operator::ADD);
            $operations[] = $operation;
        }

        // Create the keywords on the server and print out their information.
        $result = $adGroupCriterionService->mutate($operations);
        foreach ($result->getValue() as $adGroupCriterion) {
            /** @var Keyword $keyword */
            $keyword = $adGroupCriterion->getCriterion();
            printf(
                "Keyword with ad group ID %d, keyword ID %d, text '%s' and match type '%s'"
                . " was created.%s",
                $adGroupCriterion->getAdGroupId(),
                $keyword->getId(),
                $keyword->getText(),
                $keyword->getMatchType(),
                PHP_EOL
            );
        }
    }
}
