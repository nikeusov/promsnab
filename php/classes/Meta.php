<?
    /**
     * Класс данных для метатегов
     */
    class Meta
    {
        public string $title = "ПромТеплоСнаб";
        public string $description = "ПромТеплоСнаб";
        public string $keywords = "ПромТеплоСнаб";
        public string $image = "/img/og-image.png";
        public string $url;

        /**
         * Meta constructor
         */
        public function __construct()
        {
            $this->url = get_current_url(false);
        }

    }