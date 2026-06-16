<?php 

class forms
{
    public $method = null;
    public $action = null;

    public function set_method($method)
    {
        $this->method = $method;
    }

    public function get_method()
    {
        return $this->method;
    }

    public function set_action($action)
    {
        $this->action = $action;
    }

    public function get_action()
    {
        return $this->action;
    }

    public function user_info_form()
    {
        ?>
        <center>
            <h1>User Information</h1>
    
            <fieldset>
                <legend>User Information</legend>
    
                <form method="<?php echo $this->get_method(); ?>"
                      action="<?php echo $this->get_action(); ?>">
    
                    <table cellpadding="5">
    
                        <tr>
                            <th>Name</th>
                            <td><input type="text" name="name"></td>
                        </tr>
    
                        <tr>
                            <th>Email</th>
                            <td><input type="email" name="email"></td>
                        </tr>
    
                        <tr>
                            <th>Account No</th>
                            <td><input type="text" name="account_no"></td>
                        </tr>
    
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="next" value="Save">
                            </td>
                        </tr>
    
                    </table>
    
                </form>
            </fieldset>
        </center>
        <?php
    }
    
    public function show_account_form()
    {
        ?>
        <center>
            <h1>Account Information</h1>
    
            <fieldset>
                <legend>Get Account Information</legend>
                <form method="<?php echo $this->get_method(); ?>"
                      action="<?php echo $this->get_action(); ?>">
    
                    <table cellpadding="5">
    
                        <tr>
                            <th>Account No</th>
                            <td><input type="text" name="account_no"></td>
                        </tr>
    
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="show_info" value="Show Information">
                            </td>
                        </tr>
    
                    </table>
    
                </form>
            </fieldset>
        </center>
        <?php
    }
    
        

    public function deposit_form()
    {
        ?>
        <center>
            <h1>Deposit Amount</h1>
            <fieldset>
                <legend>Deposit Amount</legend>
                <form method="<?php echo $this->get_method(); ?>" 
                      action="<?php echo $this->get_action(); ?>">

                    <table cellpadding="5">

                        <tr>
                            <th>Account No</th>
                            <td><input type="text" name="account_no"></td>
                        </tr>
                        <tr>
                            <th>Deposit Amount</th>
                            <td><input type="text" name="deposit_amount"></td>
                        </tr>

                        <tr align="center">
                            <td colspan="2">
                                <input type="submit" name="deposit" value="Deposit">
                            </td>
                        </tr>

                    </table>

                </form>

            </fieldset>
        </center>
        <?php
    }

    public function withdraw_form()
    {
        ?>
        <center>
            <h1>Withdraw Amount</h1>
            <fieldset>
                <legend>Withdraw Amount</legend>
                <form method="<?php echo $this->get_method(); ?>" 
                      action="<?php echo $this->get_action(); ?>">

                    <table cellpadding="5">
                        <tr>
                            <th>Account No</th>
                            <td><input type="text" name="account_no"></td>
                        </tr>
                        <tr>
                            <th>Withdraw Amount</th>
                            <td><input type="text" name="Withdraw"></td>
                        </tr>

                        <tr align="center">
                            <td colspan="2">
                                <input type="submit" name="withdraw" value="Withdraw">
                            </td>
                        </tr>

                    </table>

                </form>

            </fieldset>
        </center>
        <?php
    }
    public function info()
    {
        ?>
        
        <h1>Account Information</h1>
    
        <table border="0" cellpadding="10">
            <tr>
                <th>User ID</th>
                <td><?php echo $_SESSION['users']['user_Id']; ?></td>
            </tr>
    
            <tr>
                <th>Name</th>
                <td><?php echo $_SESSION['users']['name']; ?></td>
            </tr>
    
            <tr>
                <th>Email</th>
                <td><?php echo $_SESSION['users']['email']; ?></td>
            </tr>
    
            <tr>
                <th>Account No</th>
                <td><?php echo $_SESSION['users']['account_no']; ?></td>
            </tr>
    
            <tr>
                <th>Balance</th>
                <td><?php echo $_SESSION['users']['amount']; ?></td>
            </tr>
        </table>
    
        <?php
    }
}

?>