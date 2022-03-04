<template>
  <h2 id="firstTitle">Mes stages :</h2>
  <section id="stage-container">
      <table>
          <thead>
              <tr>
                  <th class="cols">Entreprise</th>
                  <th class="cols">Poste</th>
                  <th class="cols">Ville</th>
                  <th class="cols">Pays</th>
                  <th class="cols">Reponse</th>
                  <th class="seeMore">Voir</th>
              </tr>
          </thead>
          <tbody>
              <tr class="ligne" v-for="stage in stages">
                  <th class="cols">{{stage.entreprise}}</th>
                  <th class="cols">{{stage.poste}}</th>
                  <th class="cols">{{stage.ville}}</th>
                  <th class="cols">{{stage.pays}}</th>
                  <th class="cols">{{stage.status}}</th>
                  <th class="seeMore">Voir | Editer</th>
              </tr>
          </tbody>
      </table>
  </section>
</template>

<style scoped>
    #firstTitle {
        font-size: 28px;
        margin: 24px 0 0 24px;
    }

    table {
        margin: 12px auto 0 auto;
        width: 95%;
    }

    tbody {
        margin-top: 24px;
    }

    #stage-container {
        margin-top: 24px;
        padding-bottom: 128px;
    }

    .cols {
        width: 18%;
        text-align: left;
    }

    thead {
        border-top: 1px black solid;
        border-bottom: 1px black solid!important;
    }

    tr {
        height: 50px;
        display: flex;
        align-items: center;
    }

    .seeMore {
        width: 10%;
        text-align: center;
    }

    .ligne {
        border-bottom: 1px rgb(177, 177, 177) solid;
        height: 72px;
    }
</style>

<script>
import { defineComponent } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";

export default defineComponent({
  components: {
    JetApplicationLogo,
  },
  props: ["stages"]
});
</script>
