<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\AdsApi\AdWords\Testing\BatchJobs\v201802;

/**
 * A fake operand for testing purpose.
 */
class FakeOperand
{

    protected $Campaign;

    /**
     * @return \Google\AdsApi\AdWords\Testing\BatchJobs\v201802\FakeCampaign
     */
    public function getCampaign()
    {
        return $this->Campaign;
    }

    /**
     * @param \Google\AdsApi\AdWords\Testing\BatchJobs\v201802\FakeCampaign
     *     $Campaign
     */
    public function setCampaign($Campaign)
    {
        $this->Campaign = $Campaign;
    }
}
