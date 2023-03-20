<?php 
$name = 'Shekwolo Michael';
//first we create an associative array for table headers
$payroll_header = [
  'Employees details',
  'Earnings',
  'Additions',
  'Deductions'
];

//second we create an associative array for the second table headers

$SecondaryHeader = [
    'ID',
    'Name',
    'Basic salary',
    'Health insurance',
    'Total Salary',
    'Total additions',
    'Total deductions'
];

//third we create a multi-dimensional array for the third table headers
$rolls = [
  [
    303940,
    'Shekwolo Michael',
    'salary' => 1303940,
    'insurance'=>203940,
    'total_salary_two'=>2303940,
    'addiction'=>303940,
    'deduction' =>303940
  ],
  [
    123456,
    'Emmanuel',
    'salary' => 300000,
    'insurance'=> 20000,
    'total_salary_two'=>2303940,
    'addiction'=>503940,
    'deduction' =>1303940
  ],
  [
    123456,
    'Emmanuel',
    'salary' => 300000,
    'insurance'=> 20000,
    'total_salary_two'=>2303940,
    'addiction'=>503940,
    'deduction' =>1303940
  ],
  [
    303940,
    'Barbara',
    'salary' => 1303940,
    'insurance'=>203940,
    'total_salary_two'=>2303940,
    'addiction'=>303940,
    'deduction' =>303940
  ],
  [
    303940,
    'Kelvin Bawa',
    'salary' => 1303940,
    'insurance'=>203940,
    'total_salary_two'=>2303940,
    'addiction'=>303940,
    'deduction' =>303940
  ],
  [
    303940,
    'Nurudeen musa',
    'salary' => 1303940,
    'insurance'=>203940,
    'total_salary_two'=>2303940,
    'addiction'=>303940,
    'deduction' =>303940
  ],
  [
    303940,
    'Asmau',
    'salary' => 1303940,
    'insurance'=>203940,
    'total_salaray_two'=>2303940,
    'addiction'=>303940,
    'deduction' =>303940
  ],
  [
    303940,
    'Chibeke bannex',
    'salary' => 1303940,
    'insurance'=>203940,
    'total_salaray_two'=>2303940,
    'addiction'=>303940,
    'deduction' =>303940
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/bcf7712443.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./dist/output.css">
  <title>payroll</title>
 <style>
    td{
      border:0.2px #e5e7eb solid;
      border-top: 0;
      padding-top: 20px;
      padding-bottom: 20px;

    }
   table tr td:nth-child(1){
    text-align: center;
    color: #5a5a5a;
   }
   table tr td:nth-child(2){
    padding-left: 10px;
    color: #5a5a5a;
   }
   table tr td:nth-child(3){
    text-align: center;
    background-color: #f8fcff;
    color: #5a5a5a;
   }
   table tr td:nth-child(4){
    text-align: center;
    background-color: #f8fcff;
    color: #5a5a5a;
   }
   table tr td:nth-child(5){
    text-align: center;
    background-color: #f8fcff;
    color: #5a5a5a;
   }
   table tr td:nth-child(6){
    text-align: right;
    padding-right: 10px;
    background-color: #f4fffc;
    color: #5a5a5a;
   }
   table tr td:nth-child(7){
    text-align: right;
    padding-right: 10px;
    background-color: #fff7f5;
    color: #5a5a5a;
   }
 
  
 </style>
</head>
<body>
  <div class="w-[100%]">
    <section class="w-[95%] h-[60px]  mx-auto flex items-center gap-4">
        <div class="w-[40px] h-[40px] bg-[#efefef] rounded-full flex items-center justify-center">
        <i class="fa-regular fa-calendar text-xl"></i>
        </div>
        <div class="text-2xl text-[#5a5a5a]">Mar 2023 Payroll
          
        </div>
    </section>
    <section class="w-[95%] h-[60px]  mx-auto flex items-center">
          <div class="w-[24%] h-[40px] rounded-lg mr-5 relative">
            <div class="absolute top-2 left-2">
            <i class="fa-solid fa-magnifying-glass text-[#5a5a5a]"></i>
            </div>
            <input type="text" class="w-full h-full px-10 text-[16px] rounded-lg border border-[#bcbcbc]" placeholder="Search employee by name or ID">
          </div>
          <div class="w-[20%] h-[40px] bg-white rounded-lg flex items-center border justify-center border-[#bcbcbc]">
            <p class="text-[#5a5a5a] pl-3"></p>Suspended employees <?php echo 9 ?> </p>
          </div>
          <div class="w-[50%] h-[40px] flex justify-end
            ml-10">
              <div class="w-[90%] h-[40px] flex justify-between ">
                  <div class="w-[40%] h-[40px] flex items-center gap-5 justify-center 
                    rounded-lg border border-[#bcbcbc]">
                  <div>
                  <i class="fa-solid fa-table-columns  text-[#5a5a5a]"></i>
                  </div>
                  <p>Customize columns</p>
                  <div class="cursor-pointer">
                  <i class="fa-solid fa-chevron-down text-[#5a5a5a]"></i>
                  </div>
              </div>
              <div class="w-[20%] h-[40px]  flex items-center justify-center gap-5 rounded-lg border border-[#bcbcbc]">
                <p>Filter by </p>
                <div>
                <div class="cursor-pointer">
                  <i class="fa-solid fa-chevron-down text-[#5a5a5a]"></i>
                  </div>
                </div>
              </div>
              <div class="w-[25%] h-[40px]  flex items-center justify-center gap-5 rounded-lg border border-[#bcbcbc]">
                <div>
                <i class="fa-solid fa-arrow-up text-[#5a5a5a]"></i>
                </div>
                <p>Bulk upload</p>
              </div>
          </div> 
    </section>
    <section class="w-[100%] h-[50px]  flex">
      <div class="w-[27%] h-[50px] text-xl border-r-0 border flex gap-2 items-center pl-3">
      <input type="checkbox" class="h-[15px] w-[15px]">  
      <?php 
          echo "<h2>$payroll_header[0]</h2>"; 
      ?>
     <!-- <h2 class="text-xl">Employee details</h2> -->
      </div>
      <div class="w-[40%] h-[50px] text-xl border border-r-0 bg-[#e7f3ff] flex items-center justify-center">
      <?php 
          echo "<h2>$payroll_header[1]</h2>"; 
      ?>
      </div>
      <div class="w-[15.7%] h-[50px] text-xl border border-r-0 bg-[#cffdec] flex items-center justify-center">
      <?php 
          echo "<h2>$payroll_header[2]</h2>"; 
      ?>
      </div>
      <div class="w-[17.7%] h-[50px]  text-xl border bg-[#ffdad3] flex items-center justify-center">
      <?php 
          echo "<h2>$payroll_header[3]</h2>"; 
      ?>
      </div>
    </section>
    <!-- table starts here -->
    <table class="w-[100%]">
      <thead>
        <tr>
              <!-- we loop through the outer array to print out the arrays as headers -->
              <?php foreach($SecondaryHeader as $headers): ?>
                  <?php echo "<td>"?>
                      <?php echo $headers; ?>
                  <?php echo "</td>" ?>
                <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
            <?php 
                //first we loop throught the sub_rolls 
                $total_salary = 0;
                $insurance = 0;
                $total_salary_two = 0;
                $addiction = 0;
                $deduction = 0;
                foreach($rolls as $roll){
                  echo "<tr>";
                  
                    foreach($roll as $key => $value){
                      echo "<td>";
                          echo $value;
                      echo "</td>";
                      if($key === 'salary'){
                        $total_salary += $value;
                      }
                      if($key === 'insurance'){
                        $insurance += $value;
                      }
                      if($key === 'total_salary_two'){
                        $total_salary_two += $value;
                      }
                      if($key === 'addiction'){
                        $addiction += $value;
                      }
                      if($key === 'deduction'){
                        $deduction -= $value;
                      }
                    }
                    
                  echo "</tr>";
                }
            ?>
          
      </tbody> 
      
    </table>
    <div class=" w-[100%] h-[70px] flex">
       <div class=" border border-r-0 h-full w-[27%]   flex justify-between items-center">
        <div class="mx-5">
          <p class="text-[#5a5a5a]">Total employees</p>
          <?php $total_employees = 42;
            echo  $total_employees;
          ?>
        </div>
        <div class="mx-5">
          <p class="text-[#5a5a5a]">Total Amount</p>
          <?php $result = $total_salary+$insurance+$total_salary_two+$addiction+$deduction;
          echo "$".$result;
          ?>  
          
        </div>
        
       </div>
       <div class=" border border-r-0 h-full w-[11.8%] flex items-center justify-center">
        <?php echo $total_salary;?>
       </div>
       <div class=" border border-r-0 h-full w-[16.5%] flex items-center justify-center">
       <?php echo $insurance;?>
       </div>
       <div class=" border border-r-0 h-full w-[11.5%] flex items-center justify-center">
       <?php echo $total_salary_two;?>
       </div>
       <div class=" border border-r-0 h-full w-[15.7%] flex items-center justify-end pr-3">
       <?php echo $addiction;?>
       </div>
       <div class="border h-full w-[17.6%] flex items-center pr-3 justify-end">
       <?php echo $deduction;?>
       </div>
  </div>
  <div class="w-[100%] h-[70px] border-t-0 flex justify-end items-center pr-5 gap-3 border">
       <div>
        <h1 class="text-2xl"><?php echo "$".$result; ?></h1>
       </div>
       <button class="bg-[#6251ff] text-white p-3 rounded-lg">Submit Payroll</button> 
  </div>
    <div class="w-[30%]  rounded-lg shadow-2xl shadow-inner-2xl  mx-auto mt-10 py-4">
    <h1 class="text-3xl py-2 px-5">Mar 2023 Payroll approval</h1>
    <p class="text-[#5a5a5a] px-5 py-2">From <span class="text-black">
    <?php echo $name?>
    </span> </p>
    <div class="py-2 text-[#5a5a5a] px-5">
      <?php
      echo date("Y-m-d H:i:s");
      ?>
    </div>
    <div class="w-[100%] bg-[#f6f6f6] px-5">
      <h1 class="py-3 text-lg font-bold">Payroll Summary</h1>
      <div class="flex justify-between py-3 items-start">
      <div class="">
        <p class="text-[#5a5a5a]">Employees included</p>
        <p>$<?php echo $result?></p>
      </div>
      <div class=" pr-[50px]">
        <p class="text-[#5a5a5a]">Total Amount</p>
        <p>36</p>
      </div>
      </div>
      <div class="flex justify-between items-start py-3">
    
      <div class=" ">
        <p class="text-[#5a5a5a]">Total Employees</p>
        <p><?php echo $total_employees?></p>
      </div>
      <div class= " ">
        <p class="text-[#5a5a5a]">Employees Excluded</p>
        <p>9</p>
      </div>
    </div>
    <div class=" flex gap-3 w-[100%] mt-5 pb-10">
      <button class="p-3 border border-[#ffdad3] w-[50%] rounded-lg bg-[#fff7f5]">Reject</button>
      <button class="p-3 w-[50%] rounded-lg bg-[#6251ff] text-white">Approve</button>
    </div>
  
    </div>
    
    
    </div>

  </div>

</body>
</html>


