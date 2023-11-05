<?php
  namespace app\lib;

  class HtmlInput extends HtmlElement {
    protected $sTitulo;
    protected $sValorDefault;
    protected $sPlaceHolder;
    protected $sSenha;

    public function __construct($sName, $sId, $sStyle, $sTitulo, $sPlaceHolder, $sSenha) {
      parent::__construct($sName, $sId, $sStyle);

      $this->sTitulo = $sTitulo;
      $this->sPlaceHolder = $sPlaceHolder;
      $this->sSenha = $sSenha;
    }

    public function renderHtml() {
      $sHtml = parent::renderHtml();

      if ($this->sSenha) {
        $sHtml .= sprintf(
          '<label for="%s">%s</label>'
          , $this->sId
          , $this->sTitulo
        );

        $sHtml .= sprintf(
          '<input type="password" name="%s" id="%s" style="%s" placeholder="%s">'
          , $this->sName
          , $this->sId
          , $this->sStyle
          , $this->sPlaceHolder
        );

      } else {
        $sHtml .= sprintf(
          '<label for="%s">%s</label>'
          , $this->sId
          , $this->sTitulo
        );

        $sHtml .= sprintf(
          '<input type="text" name="%s" id="%s" style="%s" placeholder="%s">'
          , $this->sName
          , $this->sId
          , $this->sStyle
          , $this->sPlaceHolder
        );
      }

      $sHtml .= '</div>';

      return $sHtml;
    }
  }
?>
