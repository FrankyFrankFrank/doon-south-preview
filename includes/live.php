<div class="container-fluid live">

  <div class="row">

    <div class="intro col-xs-12 col-sm-5 col-sm-offset-1 col-lg-offset-2">
      <h2>Live</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
      </p>
    </div>

  </div>

  <div id="viewer" class="row viewer">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-offset-2 home-type">
      <p v-on:click="changeType('villas')" v-bind:class="{ active: active == 'villas'}" id="villas">
        Villas
      </p>
      <p v-on:click="changeType('towns')"  v-bind:class="{ active: active == 'towns'}" id="towns">
        Towns
      </p>
    </div>

    <div class="col-xs-12 col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-2">

      <div class="row details">

        <!-- Drawing -->
        <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-12 col-md-offset-0">
          <div v-for="unit in activated">
            <img v-show="unit.active" class="drawing" v-bind:src="viewerDir + 'elevation-' + unit.name + '.svg'" />
          </div>
        </div>

        <!-- Pill -->
        <div class="unit col-xs-12 col-sm-6 col-md-12">
          <div v-for="unit in activated" v-on:click="activate(unit)" class="pill animated" v-bind:class="{ active: unit.active }">{{ unit.location }}</div>
        </div>

        <!-- Details Description-->
        <div v-for="unit in activated" class="description col-xs-12 col-sm-6 col-md-12 col-md-offset-0">
          <div v-show="unit.active">
          <h4><strong>{{ unit.location }}</strong> Unit</h4>
          <h3>{{ unit.name }}</h3>
          <ul>
            <li>{{ unit.sqft }} Sq. Ft.</li>
            <li>{{ unit.bed }} Bed</li>
            <li>{{ unit.bath }} Bath</li>
          </ul>
          <h5 class="price"><sup>$</sup>{{ unit.price }}</h5>
          </div>
        </div>

      </div>

    </div>

    <div class="floorplan col-xs-12 col-md-6 col-lg-5">
      <div v-for="unit in activated">
        <img id="floorplan" v-show="unit.active" class="img img-responsive center-block" v-bind:src="viewerDir + 'floorplan-' + unit.name + '.png'" v-bind:alt="unit.name + ' Floorplan'" />
      </div>
    </div>

  </div>

</div><!-- end LIVE -->
