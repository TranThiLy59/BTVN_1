<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        .content{
            background: #0065BB;
            padding: 60px 30px;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
        }
        .content .inner-content{
            color: white;
            position: relative;
            z-index: 1;
        }
        .content .inner-content::first-letter{
            font-size: 40px;
        }
        .content .inner-content::first-line{
            text-transform: uppercase;
        }
        .content::before{
            content: "";
            width: 120px;
            height: 120px;
            display: block;
            background: #00000038;
            border-radius: 50%;
            position: absolute;
            top: 20px;
            left: 20px;
        }
        .content::after{
            content: "";
            width: 240px;
            height: 240px;
            display: block;
            background: #00000038;
            border-radius: 50%;
            position: absolute;
            bottom: -50px;
            right: -50px;
        }
    </style>
    <?php echo '<div class="content">
        <div class="inner-content">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas perspiciatis, delectus omnis possimus ab similique? Veritatis magnam nesciunt, repellendus enim alias ullam cum maiores, esse, repudiandae quo natus repellat.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam facilis, atque exercitationem quia non aperiam esse recusandae libero dolor aut eveniet, quaerat tempora dolores ea odio temporibus repudiandae tempore. Veritatis?
        </div>
    </div>';
    ?>
</body>
</html>