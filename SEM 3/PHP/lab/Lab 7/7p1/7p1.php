
<?php
$account_no=$_POST['accountno'];
$amount=$_POST['amount'];
$current_amt=$_POST['currentB'];
class bank{
    public $account_no;
    public $amount;
    public $current_amt;

    public function __construct($account_no,$amount,$current_amt){
          $this->account_no=$account_no;
          $this->amount=$amount;
          $this->current_amt=$current_amt;
    }
    public function deposit()
    {
        echo "Deposite: Account_number::". $this->account_no." "."Amount:". $this->amount." "."cureent_balance:".$this->current_amt."<br><br>";
            echo $this->current_amt + $this->amount." "."<br>";
    }
    public function withdraw()
    {
        echo "withdraw: Account_number::". $this->account_no." "."Amount". $this->amount." "."cureent_balance:".$this->current_amt."<br><br>";
            echo $this->current_amt - $this->amount." "."<br>";
    }
}
$bank=new bank($account_no,$amount,$current_amt);
if(isset($_POST["Deposite"]))
{
    $bank->deposit();
}
if(isset($_POST["Withdraw"]))
{
    $bank->withdraw();
}
?>

