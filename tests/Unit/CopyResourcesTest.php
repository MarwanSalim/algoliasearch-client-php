<?php

namespace Algolia\AlgoliaSearch\Tests\Unit;

use Algolia\AlgoliaSearch\Exceptions\RequestException;

class CopyResourcesTest extends RequestTestCase
{
    public function testCopySettings()
    {
        try {
            static::$client->initIndex('src')->copySettingsTo('dest');
        } catch (RequestException $e) {
            $this->assertEndpointEquals($e->getRequest(), '/1/indexes/src/operation');
            $this->assertBodySubset(array(
                    'operation' => 'copy',
                    'destination' => 'dest',
                    'scope' => array('settings'),
                ),
                $e->getRequest()
            );
        }
    }

    public function testCopySynonyms()
    {
        try {
            static::$client->initIndex('src')->copySynonymsTo('dest');
        } catch (RequestException $e) {
            $this->assertEndpointEquals($e->getRequest(), '/1/indexes/src/operation');
            $this->assertBodySubset(array(
                    'operation' => 'copy',
                    'destination' => 'dest',
                    'scope' => array('synonyms'),
                ),
                $e->getRequest()
            );
        }
    }

    public function testCopyRules()
    {
        try {
            static::$client->initIndex('src')->copyRulesTo('dest');
        } catch (RequestException $e) {
            $this->assertEndpointEquals($e->getRequest(), '/1/indexes/src/operation');
            $this->assertBodySubset(array(
                    'operation' => 'copy',
                    'destination' => 'dest',
                    'scope' => array('rules'),
                ),
                $e->getRequest()
            );
        }
    }
}
