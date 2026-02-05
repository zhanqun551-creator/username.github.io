<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>站点分类与内容</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            padding: 20px;
            background-color: #fff;
            color: #333;
        }
        
        /* 右上角的大标题 */
        h1.main-title {
            text-align: right;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        /* 栏目标题 */
        h2 {
            font-size: 22px;
            font-weight: bold;
            margin-top: 30px;
            margin-bottom: 15px;
            color: #000;
        }

        /* 链接样式 */
        a {
            display: block; /* 每个链接占一行 */
            color: #007bff; /* 蓝色链接 */
            text-decoration: none;
            margin-bottom: 15px;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1 class="main-title">站点分类与内容</h1>

    <h2>分类页</h2>
    <div class="section">
        <a href="#">okdoc-t1</a>
        <a href="#">okdoc-t2</a>
        <a href="#">okdoc-t3</a>
        <a href="#">okdoc-t4</a>
    </div>

    <h2>样本内容页</h2>
    <div class="section">
        <?php
        // 配置：你的域名和路径前缀
        // 这里我用了图片里的域名做演示，你可以改成你自己的
        $baseUrl = "https://www.syxuanan.cn/yeslookx/";

        // 循环生成 3 个随机链接
        for ($i = 0; $i < 3; $i++) {
            // 生成一个 10000 到 99999 之间的随机数
            $randomId = rand(10000, 99999);
            
            // 拼接成完整 URL
            $fullUrl = $baseUrl . $randomId . ".html";
            
            // 输出链接
            echo '<a href="' . $fullUrl . '" target="_blank">' . $fullUrl . '</a>';
        }
        ?>
    </div>

    <h2>Sitemap</h2>
    <div class="section">
        <a href="/sitemap.xml">查看 Sitemap</a>
    </div>

</body>
</html>
