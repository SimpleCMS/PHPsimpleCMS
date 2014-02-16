<?php
    
    class Template{
        
        private $vars = array();
        private $template;
        
        public function __construct($template){
            $this->template = $template;
        }
        
        public function assign($key, $value){
            $this->vars[$key] = $value;
        }
        
        public function render($page){
            $path = 'templates/' . $this->template . '/' . $page . '.php';
            if(file_exists($path)){
                $contents = file_get_contents($path);
                foreach($this->vars as $key => $value){
                    $contents = preg_replace('/\{' . $key . '\}/', $value, $contents);
                }
                $contents = preg_replace('/\<\!\-\- if (.*) \-\-\>/', '<?php if ($1) : ?>', $contents);
                $contents = preg_replace('/\<\!\-\- else \-\-\>/', '<?php else : ?>', $contents);
                $contents = preg_replace('/\<\!\-\- endif \-\-\>/', '<?php endif; ?>', $contents);
                eval(' ?>' . $contents . '<?php ');
            }else{
                exit('<h1>Template error</h1>');
            }
        }
        
        public static function menu(){
            global $mysqli;
            
            $query = "SELECT * FROM menu ORDER BY position ASC";
            $result = $mysqli->query($query);
            while($row = $result->fetch_object()){ ?>
                <a href="<?php echo $row->link; ?>"><?php echo $row->name; ?></a>
            <?php 
            }
        }
        
    }

?>