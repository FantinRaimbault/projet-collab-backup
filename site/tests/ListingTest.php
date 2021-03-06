<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ListingTest extends TestCase
{
    /**
     * Test the listing api endpoint.
     *
     * @return void
     */
    public function testListingAPIEndpoint()
    {
        $this->get('/');

        $this->assertEquals(
            '{"status":"success","collection":[{"id":1,"name":"Transformers","type":"Comedy \/ Drama"},{"id":2,"name":"Knives out","type":"Mystery \/ Crime"}]}', $this->response->getContent()
        );
    }
}
