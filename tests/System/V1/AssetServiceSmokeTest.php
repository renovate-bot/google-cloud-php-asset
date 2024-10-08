<?php
/*
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
namespace Google\Cloud\Asset\Tests\System\V1;

use Google\Cloud\Asset\V1\Asset;
use Google\Cloud\Asset\V1\Client\AssetServiceClient;
use Google\Cloud\Asset\V1\ListAssetsRequest;
use Google\Cloud\Core\Testing\System\SystemTestCase;

/**
 * @group asset
 * @group gapic
 */
class AssetServiceSmokeTest extends SystemTestCase
{
    /**
     * @test
     */
    public function smokeTest()
    {
        $projectId = getenv('PROJECT_ID');
        if ($projectId === false) {
            $this->fail('Environment variable PROJECT_ID must be set for smoke test');
        }
        $client = new AssetServiceClient();

        $response = $client->listAssets(ListAssetsRequest::build('projects/' . $projectId));
        $this->assertInstanceOf(Asset::class, $response->getIterator()->current());
    }
}
