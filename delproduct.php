<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    $productnames  = file('files/productnames.txt', FILE_IGNORE_NEW_LINES);
    $productdescs  = file('files/productdescs.txt', FILE_IGNORE_NEW_LINES);
    $productprices = file('files/productprices.txt', FILE_IGNORE_NEW_LINES);
    $productimgs   = file('files/productimgs.txt', FILE_IGNORE_NEW_LINES);
    $productnumber = '';
    for ($i = 0; $i < count($productnames); $i++) {
        if (!empty($_GET['product' . $i])) {
            $productnumber = $_GET['product' . $i];
            if ($productnumber != '') {
                $productnumber = $i;
                break;
            }
        } else {
            continue;
        }
    }
    
    file_put_contents('files/productnames.txt', '');
    file_put_contents('files/productdescs.txt', '');
    file_put_contents('files/productprices.txt', '');
    file_put_contents('files/productimgs.txt', '');
    for ($i = $productnumber; $i < count($productnames); $i++) {
        $productnames[$i]  = $productnames[$i + 1];
        $productdescs[$i]  = $productdescs[$i + 1];
        $productprices[$i] = $productprices[$i + 1];
        $productimgs[$i]   = $productimgs[$i + 1];
    }
    for ($i = 0; $i < count($productnames) - 1; $i++) {
        file_put_contents('files/productnames.txt', $productnames[$i] . "\n", FILE_APPEND);
        file_put_contents('files/productdescs.txt', $productdescs[$i] . "\n", FILE_APPEND);
        file_put_contents('files/productprices.txt', $productprices[$i] . "\n", FILE_APPEND);
        file_put_contents('files/productimgs.txt', $productimgs[$i] . "\n", FILE_APPEND);
    }
    echo '<script>location.href="index.php"</script>';
} else
    header('Location:index.php');
?>