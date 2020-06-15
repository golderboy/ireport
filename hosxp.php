<?php

if($rpt == 'rpt001'){
    return [
        'PID','hn',
        ['attribute' => 'ptname','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'age','contentOptions' => ['style' => 'min-width:50px;'],],
        'labor_date','anc1','ok1','ga1','anc2','ok2','ga2','anc3','ok3','ga3','anc4','ok4','ga4','anc5','ok5','ga5'
    ];
}

if($rpt == 'rpt002'){
    return [
        'PID','hn',
        ['attribute' => 'ptname','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'age','contentOptions' => ['style' => 'min-width:50px;'],],
        'Vstdate','hospital','doctorname','PapSmear','VIA','Normal','Abnormal'
    ];
}

if($rpt == 'rpt003'){
    return [
        'PID','hn',
        ['attribute' => 'ptname','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'age','contentOptions' => ['style' => 'min-width:50px;'],],
        'pttype',
        ['attribute' => 'pttypename','contentOptions' => ['style' => 'min-width:200px;'],],
        'vstdate','vsttime','icd10','drugname'
    ];
}

if($rpt == 'rpt004'){
    return [
        'an','hn',
        ['attribute' => 'ptname','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'age','contentOptions' => ['style' => 'min-width:50px;'],],
        'pttype',
        ['attribute' => 'pttypename','contentOptions' => ['style' => 'min-width:200px;'],],
        'admdate','dchdate','opdate','dchdate','opdate','icd10' ,'icd9','Hb','Hb_Date','Hct','Hct_Date'
    ];
}

if($rpt == 'rpt005'){
    return [
        'vn','hn',
        ['attribute' => 'ptname','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'age','contentOptions' => ['style' => 'min-width:50px;'],],
        'pttype',
        ['attribute' => 'pttypename','contentOptions' => ['style' => 'min-width:200px;'],],
        'vstdate','pdx','vaccine_code',
        ['attribute' => 'vaccine_name','contentOptions' => ['style' => 'min-width:200px;'],],
        'vaccine_lot_no','expire_date',
        ['attribute' => 'drugitems','contentOptions' => ['style' => 'min-width:150px;'],],
        'doctor'
    ];
}

if($rpt == 'rpt006'){
    return [
        'PID','hn',
        ['attribute' => 'ptname','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'age','contentOptions' => ['style' => 'min-width:50px;'],],
        'preg_no','ga','lmp','edc','labor_date','labor_type',
        ['attribute' => 'hospital','contentOptions' => ['style' => 'min-width:150px;'],],
        'labname','labresult'
    ];
}

if($rpt == 'rpt007'){
    return [
        'vn','hn','an',
        ['attribute' => 'ptname','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'age','contentOptions' => ['style' => 'min-width:50px;'],],
        'vstdate','drugname'
    ];
}

if($rpt == 'rpt008'){
    return [
        'vn','hn','an',
        ['attribute' => 'ptname','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'age','contentOptions' => ['style' => 'min-width:50px;'],],
        'vstdate','drugname'
    ];
}

if($rpt == 'rpt009'){
    return [
        'vn','hn','an',
        ['attribute' => 'ptname','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'age','contentOptions' => ['style' => 'min-width:50px;'],],
        'vstdate','drugname'
    ];
}

if($rpt == 'rpt010'){
    return [
        'icode',
        ['attribute' => 'drugname','contentOptions' => ['style' => 'min-width:200px;'],],
        'did','count',
        ['attribute' => 'price','contentOptions' => ['style' => 'min-width:100px;'],'value' => function ($model) { return number_format($model['price'],2);},],
    ];
}

if($rpt == 'rpt011'){
    return [
        'icode',
        ['attribute' => 'itemsname','contentOptions' => ['style' => 'min-width:200px;'],],
        'count',
        ['attribute' => 'price','contentOptions' => ['style' => 'min-width:100px;'],'value' => function ($model) { return number_format($model['price'],2);},],       
    ];
}

if($rpt == 'rpt012'){
    return [
        'lab_code',
        ['attribute' => 'lab_name','contentOptions' => ['style' => 'min-width:200px;'],],
        'count',
        ['attribute' => 'price','contentOptions' => ['style' => 'min-width:100px;'],'value' => function ($model) { return number_format($model['price'],2);},],       
    ];
}

if($rpt == 'rpt013'){
    return [
        'hn','an','regdate','dchdate','admdate','pdx',
        ['attribute' => 'pttype','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'item_money','contentOptions' => ['style' => 'min-width:100px;'],'value' => function ($model) { return number_format($model['item_money'],2);},],
        ['attribute' => 'paid_money','contentOptions' => ['style' => 'min-width:100px;'],'value' => function ($model) { return number_format($model['paid_money'],2);},],       
        ['label' => 'UC Money','contentOptions' => ['style' => 'min-width:100px;'],'value' => function ($model) { return number_format($model['item_money']-$model['paid_money'],2);},],
    ];
}

if($rpt == 'rpt014'){
    return [
        'hn','vstdate','pdx',
        ['attribute' => 'pttype','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'item_money','contentOptions' => ['style' => 'min-width:100px;'],'value' => function ($model) { return number_format($model['item_money'],2);},],
        ['attribute' => 'paid_money','contentOptions' => ['style' => 'min-width:100px;'],'value' => function ($model) { return number_format($model['paid_money'],2);},],       
        ['label' => 'UC Money','contentOptions' => ['style' => 'min-width:100px;'],'value' => function ($model) { return number_format($model['item_money']-$model['paid_money'],2);},],
    ];
}

if($rpt == 'rpt015'){
    return [
        'icd10',
        ['attribute' => 'icd10name','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'count','contentOptions' => ['style' => 'min-width:100px;'],'value' => function ($model) { return number_format($model['count']);},],
    ];
}

if($rpt == 'rpt016'){
    return [
        'icd10',
        ['attribute' => 'icd10name','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'count','contentOptions' => ['style' => 'min-width:100px;'],'value' => function ($model) { return number_format($model['count']);},],
    ];
}

if($rpt == 'rpt017'){
    return [
        'icd10',
        ['attribute' => 'icd10name','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'count','contentOptions' => ['style' => 'min-width:100px;'],'value' => function ($model) { return number_format($model['count']);},],
    ];
}

if($rpt == 'rpt018'){
    return [
       ['attribute' => 'year','label' => 'ปี','value' => function ($model) { return $model['year']+543;},],
       ['attribute' => 'month','label' => 'เดือน','value' => function ($model) { 
            $thai_month_arr=array("0"=>"","1"=>"ม.ค","2"=>"ก.พ","3"=>"มี.ค","4"=>"เม.ย","5"=>"พ.ค","6"=>"มิ.ย","7"=>"ก.ค","8"=>"ส.ค","9"=>"ก.ย","10"=>"ต.ค","11"=>"พ.ย","12"=>"ธ.ค");
        return $thai_month_arr[$model['month']];
        },],

       ['attribute' => 'visit','label' => 'ครั้ง','value' => function ($model) { return number_format($model['visit']);},],
       ['attribute' => 'person','label' => 'คน','value' => function ($model) { return number_format($model['person']);},],
       ['attribute' => 'M','label' => 'เช้า(ครั้ง)','value' => function ($model) { return number_format($model['M']);},],
       ['attribute' => 'Mperson','label' => 'เช้า(คน)','value' => function ($model) { return number_format($model['Mp']);},],
       ['attribute' => 'A','label' => 'บ่าย(ครั้ง)','value' => function ($model) { return number_format($model['A']);},],
       ['attribute' => 'Aperson','label' => 'บ่าย(คน)','value' => function ($model) { return number_format($model['Ap']);},],
       ['attribute' => 'N','label' => 'ดึก(ครั้ง)','value' => function ($model) { return number_format($model['N']);},],
       ['attribute' => 'Nperson','label' => 'ดึก(คน)','value' => function ($model) { return number_format($model['Np']);},],
    ];
}

if($rpt == 'rpt019'){
    return [
       ['attribute' => 'vstdate','label' => 'วันที่มารับบริการ',],
       ['attribute' => 'visit','label' => 'ครั้ง','value' => function ($model) { return number_format($model['visit']);},],
       ['attribute' => 'person','label' => 'คน','value' => function ($model) { return number_format($model['person']);},],
       ['attribute' => 'M','label' => 'เช้า(ครั้ง)','value' => function ($model) { return number_format($model['M']);},],
       ['attribute' => 'Mperson','label' => 'เช้า(คน)','value' => function ($model) { return number_format($model['Mp']);},],
       ['attribute' => 'A','label' => 'บ่าย(ครั้ง)','value' => function ($model) { return number_format($model['A']);},],
       ['attribute' => 'Aperson','label' => 'บ่าย(คน)','value' => function ($model) { return number_format($model['Ap']);},],
       ['attribute' => 'N','label' => 'ดึก(ครั้ง)','value' => function ($model) { return number_format($model['N']);},],
       ['attribute' => 'Nperson','label' => 'ดึก(คน)','value' => function ($model) { return number_format($model['Np']);},],
    ];
}

if($rpt == 'rpt020'){
    return [
       ['attribute' => 'year','label' => 'ปี',],
       ['attribute' => 'month','label' => 'เดือน','value' => function ($model) { 
            $thai_month_arr=array("0"=>"","1"=>"ม.ค","2"=>"ก.พ","3"=>"มี.ค","4"=>"เม.ย","5"=>"พ.ค","6"=>"มิ.ย","7"=>"ก.ค","8"=>"ส.ค","9"=>"ก.ย","10"=>"ต.ค","11"=>"พ.ย","12"=>"ธ.ค");
        return $thai_month_arr[$model['month']];
        },],

       ['attribute' => 'visit','label' => 'Admit(ครั้ง)','value' => function ($model) { return number_format($model['visit']);},],
       ['attribute' => 'readmit','label' => 'ReAdmit','value' => function ($model) { return number_format($model['readmit']);},],
       ['attribute' => 'M','label' => 'เช้า(ครั้ง)','value' => function ($model) { return number_format($model['M']);},],
       ['attribute' => 'A','label' => 'บ่าย(ครั้ง)','value' => function ($model) { return number_format($model['A']);},],
       ['attribute' => 'N','label' => 'ดึก(ครั้ง)','value' => function ($model) { return number_format($model['N']);},],
    ];
}

if($rpt == 'rpt021'){
    return [
        ['attribute' => 'DIAG','label' => 'วินิฉัย'],
        ['attribute' => 'SUM','label' => 'จำนวน'],
    ];
}

if($rpt == 'rpt022'){
    return [
        'hn','cid','pid',
        ['attribute' => 'ptname','contentOptions' => ['style' => 'min-width:200px;'],],
        'sex','birthday',
        ['attribute' => 'informaddr','contentOptions' => ['style' => 'min-width:250px;'],],
        'type_area',
    ];
}

if($rpt == 'rpt023'){
    return [
        'vn','hn',
        ['attribute' => 'vstdate','contentOptions' => ['style' => 'min-width:100px;'],],
        'vsttime','oqueue',
        ['attribute' => 'ptname','contentOptions' => ['style' => 'min-width:200px;'],],
        'age','sex',
        //['attribute' => 'spclty_name','contentOptions' => ['style' => 'min-width:100px;'],],
        ['attribute' => 'ovstist_name','label'=>'การมา','contentOptions' => ['style' => 'min-width:150px;'],],
        //['attribute' => 'department_name','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'register_department_name','contentOptions' => ['style' => 'min-width:300px;'],],
        'pt_walk_name','height','waist','bmi','bpd','bps','bw',
        //['attribute' => 'hr','contentOptions' => ['style' => 'min-width:200px;'],],
        //['attribute' => 'pe','contentOptions' => ['style' => 'min-width:200px;'],],
        'pulse','rr','temperature',
        ['attribute' => 'cc','contentOptions' => ['style' => 'min-width:200px;'],],
        //['attribute' => 'hpi','contentOptions' => ['style' => 'min-width:200px;'],],
        //['attribute' => 'pmh','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'pttype_name','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'pdx_name','contentOptions' => ['style' => 'min-width:300px;'],],
        ['attribute' => 'ost_name','contentOptions' => ['style' => 'min-width:100px;'],],
        //['attribute' => 'doctor_list_text','contentOptions' => ['style' => 'min-width:200px;'],],
        'income',['attribute' => 'income','label' => 'ค่าใช้จ่าย','value' => function ($model) { return number_format($model['income'],2);},],
        'countvn'
    ];
}

if($rpt == 'rpt024'){
    return [
        ['attribute' => 'vstdate','contentOptions' => ['style' => 'min-width:100px;'],],
        'hn',
        ['attribute' => 'ptname','contentOptions' => ['style' => 'min-width:200px;'],],
        ['attribute' => 'dname','contentOptions' => ['style' => 'min-width:300px;'],],
    ];
}
