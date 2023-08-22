<?php

    class QueryBuilder
    {
        protected $pdo;
      
        
        public function __construct($pdo)
        {
           return $this->pdo = $pdo;
           
        }
      
        public function selectAll($table)
        {
            $statement=$this->pdo->prepare("select * from $table");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }

        public function insert($dataArr,$table)
        {
            $getDataKeys = array_keys($dataArr);
            $cols = implode(",", $getDataKeys);
            
            $questionMark = "";
            foreach($getDataKeys as $key){
                $questionMark .= "?,";
            }
            $questionMark= rtrim($questionMark,',');


            $sql = "insert into $table ($cols) values ($questionMark)"; //cols နှစ်ခုဆိုရင် ? က နှစ်ခုဖြစ်ရမယ်
            $statement=$this->pdo->prepare($sql);
            $getDataValues = array_values($dataArr);
            $statement->execute($getDataValues);
          
        }
      
      
    }