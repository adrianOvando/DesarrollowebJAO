<div class="correos">
  <div class="row">
    <div class="col" style="align-items: stretch; padding-top: 40px">
      <div
        class="button"
        style="border: 1px solid blue"
        onclick="getCorreos('entrada')"
      >
        Bandeja de entrada
      </div>
      <div
        class="button"
        style="border: 1px solid orange"
        onclick="getCorreos('salida')"
      >
        Bandeja de salida
      </div>
    </div>
    <div class="col">
      <div
        class="button"
        style="
          background-color: rgb(116, 116, 231);
          border: 1px solid blue;
          color: white;
        "
        onclick="redactar()"
      >
        Redactar
      </div>
      <div id="correos"></div>
    </div>
  </div>
</div>
