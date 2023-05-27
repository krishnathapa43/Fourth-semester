<?php

class BankAccount{
    protected $amount;

    protected $interestRate;

    public function __construct($openingBalance)
    {
        $this -> amount = $openingBalance;
    }  

    public function withdraw($withDrawAmount){

        if($withDrawAmount > $this -> amount){
            echo("Insufficent Balance.");
            return;
        }
        $this -> amount = $this -> amount - $withDrawAmount; 
        echo "withdraw amount $withDrawAmount";
    }

    public function deposit($depositAmount)
    {
        $this -> amount = $depositAmount;
    }

    public function checkBalance()
    {
        echo "your balance is :" .$this -> amount;
    }

    public function calculateInterest($year)
    {
        echo "Total Interest:".($this-> amount * $year * $this -> interestRate )/100;
    }
}

// $jhonBankAccount = new BankAccount();
// $jhonBankAccount -> withdraw(2000);

// $BenBankAccount = new BankAccount();
// $BenBankAccount -> deposit(20000);
// $BenBankAccount -> checkBalance();
// $BenBankAccount ->withdraw(100000);  // die
// $BenBankAccount -> checkBalance();


// $BenBankAccount = new BankAccount(100000);
// $BenBankAccount -> checkBalance();


class savingAccount extends BankAccount{

    public $interestRate = 6;

    public function withdraw($withDrawAmount){
        if($withDrawAmount > 100000){
        echo"cannot withdraw  more amount than 1 lakh in saving account";
        return;
    }
    parent::withdraw($withDrawAmount);
}
}
// $BenBankAccount = new savingAccount(100000);
// $BenBankAccount -> withdraw(20000);
// $BenBankAccount -> checkBalance();
// $BenBankAccount -> calculateInterest(2);



class FixedDepositAccount extends BankAccount{

    protected $interestRate = 12;
    public function withdraw($withDrawAmount){
        echo"cannot withdraw in fixed amount";
    }
}

$BenBankAccount = new FixedDepositAccount(100000);
$BenBankAccount -> withdraw(20000);
$BenBankAccount -> checkBalance();
$BenBankAccount -> calculateInterest(2);


