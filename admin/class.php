<?php
class CrudHandler
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    //  Inserting data to database.
    public function editUser($editForm)
    {
        $fname = $editForm['fname'];
        $num = $editForm['num'];
        $uname = $editForm['uname'];
        $pass = $editForm['pass'];
        $id = $editForm['id'];


        $sql = "UPDATE `user` SET `fname`='$fname',`num`='$num',`uname`='$uname',`pass`='$pass' WHERE `id` = $id";
        // Perform any necessary validation or processing of form data
        // For example, you might insert the data into a database
        if ($this->conn->query($sql) === true) {
            return "UPDATED";
        } else {
            return "error";
            // Here, we'll just return a success message

        }
    }

    public function disableUser()
    {
        $id = $_POST['id'];
        $sql = "UPDATE `user` SET `status` = 'disabled' WHERE `id` = $id";
        if ($this->conn->query($sql) === true) {
            return "success";
        } else {
            return "error";
        }
    }

    public function enableUser()
    {
        $id = $_POST['id'];
        $sql = "UPDATE `user` SET `status` = 'active' WHERE `id` = $id";
        if ($this->conn->query($sql) === true) {
            return "success";
        } else {
            return "error";
        }
    }

    public function addUser($add)
    {
        $fname = $add["fname"];
        $num = $add['num'];
        $uname = $add['uname'];
        $pass = $add['pass'];

        $sql = "INSERT INTO `user`(`fname`, `num`, `uname`, `pass`, `status`) VALUES ('$fname','$num','$uname','$pass', 'active') ";
        if ($this->conn->query($sql) === true) {
            return "success";
        } else {
            return "error";
        }
    }

    public function addSenior($addSenior)
    {
        $snrID = $addSenior['snrID'];
        $fname = $addSenior['fname'];
        $mname = $addSenior['mname'];
        $lname = $addSenior['lname'];
        $sex = $addSenior['sex'];
        $bday = $addSenior['bday'];
        $age = $addSenior['age'];
        $bplace = $addSenior['bplace'];
        $addr = $addSenior['addr'];
        $cnum = $addSenior['cnum'] ?? 'null';
        $email = $addSenior['email'] ?? 'null';
        $econ = $addSenior['econ'];
        $eaddr = $addSenior['eaddr'];
        $btype = $addSenior['btype'];
        $hprob = $addSenior['hprob'] ?? 'null';
        $dissa = $addSenior['disability'] ?? 'null';
        $educ = $addSenior['educ'];
        $skill = $addSenior['skill'] ?? 'null';
        $status = 'active';

        $sql = "INSERT INTO `senior`(`id`, `fname`, `mname`, `lname`, `sex`, `bday`, `age`, `bplace`, `addr`, `cnum`, `email`, `econ`, `eaddr`, `btype`, `hprob`, `disability`, `educ`, `skill`, `status`) 
        VALUES ('$snrID','$fname','$mname','$lname','$sex','$bday','$age','$bplace','$addr','$cnum','$email','$econ','$eaddr','$btype','$hprob','$dissa','$educ','$skill', '$status')";
        if ($this->conn->query($sql) === true) {
            return 'ADDED';
        } else {
            return 'error';
        }
    }

    public function editSenior($editSenior)
    {
        $snrID = $editSenior['snrID'];
        $fname = $editSenior['fname'];
        $mname = $editSenior['mname'];
        $lname = $editSenior['lname'];
        $sex = $editSenior['sex'];
        $bday = $editSenior['bday'];
        $age = $editSenior['age'];
        $bplace = $editSenior['bplace'];
        $addr = $editSenior['addr'];
        $cnum = $editSenior['cnum'];
        $email = $editSenior['email'];
        $econ = $editSenior['econ'];
        $eaddr = $editSenior['eaddr'];
        $btype = $editSenior['btype'];
        $hprob = $editSenior['hprob'];
        $dissa = $editSenior['disability'];
        $educ = $editSenior['educ'];
        $skill = $editSenior['skill'];

        $sql = "UPDATE `senior` SET 
        `fname` = '$fname', 
        `mname` = '$mname', 
        `lname` = '$lname', 
        `sex` = '$sex', 
        `bday` = '$bday', 
        `age` = '$age', 
        `bplace` = '$bplace',
        `addr` = '$addr',
        `cnum` = '$cnum',
        `email` = '$email',
        `econ` = '$econ',
        `eaddr` = '$eaddr',
        `btype` = '$btype',
        `hprob` = '$hprob',
        `disability` = '$dissa',
        `educ` = '$educ',
        `skill` = '$skill',
        `status` = 'active'
        WHERE id = '$snrID' ";

        if ($this->conn->query($sql) === true) {
            return 'updated';
        } else {
            return 'error';
        }
    }

    //  Deleting data to the database.
    public function deleteSenior()
    {
        $id = $_POST['id'];
        $sql = "UPDATE `senior` SET `status` = 'deleted' WHERE `id` = '$id'";
        if ($this->conn->query($sql) === true) {
            return "success";
        } else {
            return "error";
        }
    }

    public function deleteUser()
    {
        $id = $_POST['id'];
        $sql = "UPDATE `user` SET `status` = 'deleted' WHERE `id` = '$id'";
        if ($this->conn->query($sql) === true) {
            return "success";
        } else {
            return "error";
        }
    }

    // for updating data
    public function update($updateData)
    {
        $id = $updateData['id'];
        $name = $updateData["name"];
        $age = $updateData["age"];
        $add = $updateData["add"];
        $sql = "UPDATE `profile` SET `name` = '$name', age = '$age', `addr` = '$add' WHERE `id` = '$id'";
        if ($this->conn->query($sql) === true) {
            return 'UPDATED!';
        } else {
            return 'error';
        }
    }
}
