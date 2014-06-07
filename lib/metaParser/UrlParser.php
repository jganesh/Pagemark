<?php

    require_once  'Curler.class.php';
    require_once  'MetaParser.class.php';

    class UrlParser {
      
       public function __construct(){
            $this->url = "";
            $this->metaData = "";
            $this->body = "";
            $this->curler = (new Curler());
            $this->parser = "";
       }
   
       public function getMeta($url){
            $this->url = $url;
            $this->setBody(); 
            $this->parseMeta();
            return $this->metaData;
       }

       public function setBody(){
            $this->body = $this->curler->get($this->url);
       }
      
       public function parseMeta(){
            $this->parser = (new MetaParser($this->body, $this->url));
            $rawMeta = $this->parser->getDetails();
            $metaConstruct = array();
            if(isset($rawMeta['openGraph']) && !empty($rawMeta['openGraph']))
            {
                $metaConstruct['title']       = isset($rawMeta['openGraph']['title'])       ? $rawMeta['openGraph']['title']       : (isset($rawMeta['title'])       ? $rawMeta['title']       : "");
                $metaConstruct['description'] = isset($rawMeta['openGraph']['description']) ? $rawMeta['openGraph']['description'] : (isset($rawMeta['meta']['description']) ? $rawMeta['meta']['description'] : "");
                $metaConstruct['image']       = isset($rawMeta['openGraph']['image'])       ? $rawMeta['openGraph']['image']       : "" ;
                $metaConstruct['site_name']   = isset($rawMeta['openGraph']['site_name'])   ? $rawMeta['openGraph']['site_name']   : "" ; 
                $metaConstruct['url']         = isset($rawMeta['openGraph']['url'])         ? $rawMeta['openGraph']['url']         : $this->url ;
                $metaConstruct['type']        = isset($rawMeta['openGraph']['type'])        ? $rawMeta['openGraph']['type']        : "" ;
            }
            $metaConstruct['base'] = $rawMeta['base'];
            $this->metaData = json_encode($metaConstruct);
       }
    }

