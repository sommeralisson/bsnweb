<?php
  namespace app\lib;

  require_once 'HtmlElement.php';

  class HtmlTable extends HtmlElement {
    protected $iNumColunas;
    protected $iNumLinhas;
    protected $aLinhas = [];

    public function __construct($sName, $sId, $sStyle, $iNumColunas, $iNumLinhas) {
      parent::__construct($sName, $sId, $sStyle);
      $this->iNumColunas = $iNumColunas;
      $this->iNumLinhas  = $iNumLinhas;
    }

    public function addLinha($aLinha) {
      if (count($aLinha) == $this->iNumColunas) {
        $this->aLinhas[] = $aLinha;
      } else {
      }
    }

    public function renderHtml() {
      $sHtml = parent::renderHtml();
      $sHtml .= "<table>";

      foreach ($this->aLinhas as $aLinha) {
        $sHtml .= "<tr>";

        foreach ($aLinha as $aColuna) {
            $sHtml .= "<td>$aColuna</td>";
        }

        $sHtml .= "</tr>";
      }

      $sHtml .= "</table>";
      $sHtml .= "</div>";

      return $sHtml;
    }
  }
?>
