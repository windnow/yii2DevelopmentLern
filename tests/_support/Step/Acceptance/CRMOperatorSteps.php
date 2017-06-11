<?php
namespace Step\Acceptance;

class CRMOperatorSteps extends \AcceptanceTester
{
    function amInAddCustomerUi(){
        $I=$this;
        $I->amOnPage('/customer/add');
    }
    public function imagineCustomer(){
        $faker = \Faker\Factory::create();
        return [
            'CustomerRecord[name]' => $faker->name,
            'CustomerRecord[birth_date]' => $faker->date('Y-m-d'),
            'CustomerRecord[notes]' => $faker->sentence(8),
            'PhoneRecord[number]' => $faker->phoneNumber,
        ];
    }
    
    function submitCustomerDataForm(){
        $I=$this;
        $I->click('Submit');
    }
    
    public function seeIAmInListCustomerUi(){
        $I=$this;
        $I->seeCurrentUrlMatches('/customers/');
    }
    
    function amInAddCustomerUi(){
        $I=$this;
        $I->amOnPage('/customers');
    }
}