<?php declare(strict_types=1);
/**
 * modethirteen.php
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
namespace modethirteen\TypeEx\Tests\StringEx;

use modethirteen\TypeEx\StringEx;
use PHPUnit\Framework\TestCase;

class endsWithInvariantCase_Test extends TestCase {

    /**
     * @test
     */
    public function String_ends_with() {

        // act
        $result = (new StringEx('FOObAr'))->endsWithInvariantCase('bar');

        // assert
        static::assertEquals(true, $result);
    }

    /**
     * @test
     */
    public function String_does_not_end_with() {

        // act
        $result = (new StringEx('foobar'))->endsWithInvariantCase('gak');

        // assert
        static::assertEquals(false, $result);
    }
}
