<?phpreturn [		'user-management' => [		'title' => '用户管理',		'created_at' => 'Time',		'fields' => [		],	],		'permissions' => [		'title' => '权限列表',		'created_at' => 'Time',		'fields' => [			'name' => '权限名称',		],	],		'roles' => [		'title' => '角色列表',		'created_at' => 'Time',		'fields' => [			'name' => '角色名称',			'permission' => '权限',		],	],		'users' => [		'title' => '用户列表',		'created_at' => 'Time',		'fields' => [			'name' => '用户名',			'email' => '邮箱',			'password' => '密码',			'roles' => '角色',			'remember-token' => '记住密码',		],	],    'customer-management' => [        'title' => '客户管理',        'created_at' => 'Time',        'fields' => [        ],    ],    'customer-list' => [        'title' => '客户列表',        'created_at' => 'Time',        'fields' => [            'name'=>'姓名',            'phone'=>'电话',            'address'=>'地址',            'goods'=>'购买商品',            'pay_money'=>'是否缴纳定金',            'status'=>'支付状态',            'vipflag'=>'是否VIP',            'created_at'=>'创建时间'        ],    ],    'customer-complete-fee' => [        'title' => '已清款列表',        'created_at' => 'Time',        'fields' => [        ],    ],    'customer-uncomplete-fee' => [        'title' => '未清款列表',        'created_at' => 'Time',        'fields' => [        ],    ],    'customer-pay' => [        'title' => '缴纳定金',        'created_at' => 'Time',        'fields' => [        ],    ],    'category' => [        'title' => '分类管理',        'created_at' => 'Time',        'fields' => [        ],    ],    'category-list' => [        'title' => '分类列表',        'created_at' => 'Time',        'fields' => [        ],    ],    'goods-management' => [        'title' => '商品管理',        'created_at' => 'Time',        'fields' => [        ],    ],    'goods-list' => [        'title' => '商品管列表',        'created_at' => 'Time',        'fields' => [        ],    ],    'construction-mangagement' => [        'title' => '施工管理',        'created_at' => 'Time',        'fields' => [        ],    ],    'construction-list' => [        'title' => '施工列表',        'created_at' => 'Time',        'fields' => [        ],    ],    'construction-complete' => [        'title' => '施工完成',        'created_at' => 'Time',        'fields' => [        ],    ],    'construction-uncomplete' => [        'title' => '施工中',        'created_at' => 'Time',        'fields' => [        ],    ],    'construction-no' => [        'title' => '未施工',        'created_at' => 'Time',        'fields' => [        ],    ],    'money-mangagement' => [        'title' => '财务管理',        'created_at' => 'Time',        'fields' => [        ],    ],    'money-cost-list' => [        'title' => '商品成本列表',        'created_at' => 'Time',        'fields' => [        ],    ],    'money-profit-list' => [        'title' => '利润列表',        'created_at' => 'Time',        'fields' => [        ],    ],    'money-person-fee' => [        'title' => '人工费用',        'created_at' => 'Time',        'fields' => [        ],    ],    'data-analysis' => [        'title' => '数据分析',        'created_at' => 'Time',        'fields' => [        ],    ],    'profit-analisis' => [        'title' => '利润分析',        'created_at' => 'Time',        'fields' => [        ],    ],    'product-analysis' => [        'title' => '产品销量分析',        'created_at' => 'Time',        'fields' => [        ],    ],	'app_create' => '创建',	'app_save' => '保存',	'app_edit' => '修改',	'app_view' => 'View',	'app_update' => '更新',	'app_list' => '列表',	'app_no_entries_in_table' => '暂无数据',	'custom_controller_index' => 'Custom controller index.',	'app_logout' => '退出',	'app_add_new' => '添加',	'app_are_you_sure' => '你确定吗?',	'app_back_to_list' => '回到列表',	'app_dashboard' => '首页',	'app_delete' => '删除',	'global_title' => '好太太仓库管理系统',];