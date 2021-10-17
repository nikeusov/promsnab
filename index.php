<?
    const ROOT = __DIR__;

    include ROOT . "/vendor/autoload.php";
    include ROOT . "/php/common.php";

    if (file_exists(ROOT . "/.env")) {
        Dotenv\Dotenv::createImmutable(ROOT)->load();
    } else {
        $_ENV["MODE"] = "prod";
    }

    if ($_ENV["MODE"] === "dev") {
        include ROOT . "/php/display-errors.php";
    }

    $page = get_page();

    if ($page->code === 404) {
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    }

    $smarty = init_smarty();
    $smarty->assign([
        "page" => $page,
        "phone" => new Phone("+7(861)123-45-67"),
        "email" => new Email("test@test.ru"),
        "meta" => new Meta(),
        "inline_scripts" => inline_scripts(actual_bundle_path("dist/js", "inline")),
        "vendor_scripts" => external_scripts(actual_bundle_path("dist/js", "vendor")),
        "common_scripts" => external_scripts(actual_bundle_path("dist/js", "common")),
        "vendor_styles" => external_styles(actual_bundle_path("dist/css/prod", "vendor")),
        "common_styles" => styles_by_mode("common")
    ])->display($page->view);