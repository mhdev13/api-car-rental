<?php

class RentalTest extends TestCase
{
    /**
     * /rental [GET]
     */
    public function testShouldReturnAllRental(){

        $this->get("rental", []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'data' => ['*' =>
                [
                    'title',
                    'rate',
                    'category',
                    'quantity',
                    'created_at',
                    'updated_at'
                ]
            ]
        ]);
        
    }

    /**
     * /rental/id [GET]
     */
    public function testShouldReturnRental(){
        $this->get("rental/1", []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure(
            ['data' =>
                [
                    'title',
                    'rate',
                    'category',
                    'quantity',
                    'created_at',
                    'updated_at'
                ]
            ]    
        );
        
    }

    /**
     * /rental [POST]
     */
    public function testShouldCreateRental(){

        $parameters = [
            'title' => 'beranak dalam kubur',
            'rate' => '9',
            'category' => 'horor',
            'quantity' => '1',
        ];

        $this->post("rental", $parameters, []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure(
            ['data' =>
                [
                    'title',
                    'rate',
                    'category',
                    'quantity',
                    'created_at',
                    'updated_at'
                ]
            ]    
        );
        
    }
    
    /**
     * /rental/id [PUT]
     */
    public function testShouldUpdateRental(){

        $parameters = [
            'title' => 'beranak dalam kuburss',
            'rate' => '8',
        ];

        $this->put("rental/2", $parameters, []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure(
            ['data' =>
                [
                    'title',
                    'rate',
                    'category',
                    'quantity',
                    'created_at',
                    'updated_at'
                ]
            ]    
        );
    }

}