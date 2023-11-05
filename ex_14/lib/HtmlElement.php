<?php
  namespace app\lib;

  class HtmlElement {
    protected $sName;
    protected $sId;
    protected $sStyle;

    public function __construct($sName, $sId, $sStyle) {
      $this->sName = $sName;
      $this->sId = $sId;
      $this->sStyle = $sStyle;
    }

    public function renderHtml() {
      $sHtmlDiv = sprintf(
        '<div name="%s" id="%s" style="%s">'
        , $this->sName
        , $this->sId
        , $this->sStyle
      );

      return $sHtmlDiv;
    }
  }

?>