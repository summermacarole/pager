<?php
/**
 * Created by PhpStorm.
 * User: littlemacarole
 * Date: 2016/9/20
 * Time: 22:07
 * Description:
 */
header('Content-Type:application/json;charset=utf-8');
class Paging{
    public $myOrder;
}
$paging=new Paging();
$paging->myOrder=[
            "num"=>200,
            "total"=>20000.0,
            "infos"=>[
                    ["month"=>9,"orders"=>[
                            ["heading"=>"头像1","nickname"=>"言叶之挺","utime"=>time(),"comm"=>20.0,"type"=>"现金","g_type"=>"旅行书","desc"=>"星期二"],
                            ["heading"=>"头像2","nickname"=>"天上飞鸟","utime"=>time(),"comm"=>23.0,"type"=>"抵价券","g_type"=>"文学书","desc"=>"星期三"],
                            ["heading"=>"头像3","nickname"=>"美国为什么崛起","utime"=>time(),"comm"=>22.0,"type"=>"现金","g_type"=>"时政","desc"=>"星期四"],
                            ["heading"=>"头像4","nickname"=>"水中月","utime"=>time(),"comm"=>26.0,"type"=>"抵价券","g_type"=>"文学书籍","desc"=>"星期五"],
                            ["heading"=>"头像5","nickname"=>"水中月","utime"=>time(),"comm"=>26.0,"type"=>"抵价券","g_type"=>"文学书籍","desc"=>"星期五"],
                            ["heading"=>"头像6","nickname"=>"水中月","utime"=>time(),"comm"=>26.0,"type"=>"抵价券","g_type"=>"文学书籍","desc"=>"星期五"]
                        ]
                    ],
                    ["month"=>8,"orders"=>[
                            ["heading"=>"头像7","nickname"=>"美国为什么崛起","utime"=>time(),"comm"=>22.0,"type"=>"现金","g_type"=>"时政","desc"=>"星期四"],
                            ["heading"=>"头像8","nickname"=>"水中月","utime"=>time(),"comm"=>26.0,"type"=>"抵价券","g_type"=>"文学书籍","desc"=>"星期五"]
                        ]
                    ],
                    ["month"=>7,"orders"=>[
                            ["heading"=>"头像9","nickname"=>"言叶之挺","utime"=>time(),"comm"=>20.0,"type"=>"现金","g_type"=>"旅行书","desc"=>"星期二"],
                            ["heading"=>"头像10","nickname"=>"天上飞鸟","utime"=>time(),"comm"=>23.0,"type"=>"抵价券","g_type"=>"文学书","desc"=>"星期三"],
                            ["heading"=>"头像11","nickname"=>"美国为什么崛起","utime"=>time(),"comm"=>22.0,"type"=>"现金","g_type"=>"时政","desc"=>"星期四"],
                            ["heading"=>"头像12","nickname"=>"水中月","utime"=>time(),"comm"=>26.0,"type"=>"抵价券","g_type"=>"文学书籍","desc"=>"星期五"],
                            ["heading"=>"头像13","nickname"=>"言叶之挺","utime"=>time(),"comm"=>20.0,"type"=>"现金","g_type"=>"旅行书","desc"=>"星期二"],
                            ["heading"=>"头像14","nickname"=>"天上飞鸟","utime"=>time(),"comm"=>23.0,"type"=>"抵价券","g_type"=>"文学书","desc"=>"星期三"]
                        ]
                    ],
                    ["month"=>6,"orders"=>[
                            ["heading"=>"头像15","nickname"=>"言叶之挺","utime"=>time(),"comm"=>20.0,"type"=>"现金","g_type"=>"旅行书","desc"=>"星期二"],
                            ["heading"=>"头像16","nickname"=>"天上飞鸟","utime"=>time(),"comm"=>23.0,"type"=>"抵价券","g_type"=>"文学书","desc"=>"星期三"],
                            ["heading"=>"头像17","nickname"=>"美国为什么崛起","utime"=>time(),"comm"=>22.0,"type"=>"现金","g_type"=>"时政","desc"=>"星期四"],
                            ["heading"=>"头像18","nickname"=>"水中月","utime"=>time(),"comm"=>26.0,"type"=>"抵价券","g_type"=>"文学书籍","desc"=>"星期五"]
                        ]
                    ],
                    ["month"=>5,"orders"=>[
                            ["heading"=>"头像19","nickname"=>"言叶之挺","utime"=>time(),"comm"=>20.0,"type"=>"现金","g_type"=>"旅行书","desc"=>"星期二"],
                            ["heading"=>"头像20","nickname"=>"天上飞鸟","utime"=>time(),"comm"=>23.0,"type"=>"抵价券","g_type"=>"文学书","desc"=>"星期三"],
                            ["heading"=>"头像21","nickname"=>"美国为什么崛起","utime"=>time(),"comm"=>22.0,"type"=>"现金","g_type"=>"时政","desc"=>"星期四"],
                            ["heading"=>"头像22","nickname"=>"水中月","utime"=>time(),"comm"=>26.0,"type"=>"抵价券","g_type"=>"文学书籍","desc"=>"星期五"]
                        ]
                    ]
]
];
echo json_encode($paging);