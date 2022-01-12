<?php
include_once "Employee.php";

class Data
{
    private $path;

    public function __construct()
    {
        $this->path = "data.json";
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data); // chuyển dữ liệu từ dạng mảng về chuỗi để lưu vào data.json
        file_put_contents($this->path, $dataJson);
    }

    public function loadData()
    {
        $dataJson = file_get_contents($this->path);
        return json_decode($dataJson);// chuyển dữ liệu từ dạng chuỗi về dạng mảng liên kết hoặc object;
    }

    public function AddNewEmployee($employee1)
    {
        $data = [
            "surname" => $employee1->getSurname(),
            "name" => $employee1->getName(),
            "dob" => $employee1->getDob(),
            "address" => $employee1->getAddress(),
            "position" => $employee1->getPosition(),
        ];
        $employees = $this->loadData();
        $employees[] = $data;
        $this->saveData($employees); // lưu mảng vào data.json
    }
}