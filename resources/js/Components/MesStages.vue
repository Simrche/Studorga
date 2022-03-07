<template>
  <h2 id="firstTitle">Mes stages :</h2>
  <div id="addStage">
      <a :href="route('createStage')">+ Ajouter un stage</a>
  </div>
  <section id="stage-container">
      <table>
          <thead>
              <tr>
                  <th class="cols">Entreprise</th>
                  <th class="cols">Poste</th>
                  <th class="cols">Ville</th>
                  <th class="cols">Pays</th>
                  <th class="cols">Status</th>
                  <th class="seeMore">Action</th>
              </tr>
          </thead>
          <tbody>
              <tr class="ligne" v-for="stage in stages">
                  <th class="cols">{{stage.entreprise}}</th>
                  <th class="cols">{{stage.poste}}</th>
                  <th class="cols">{{stage.ville}}</th>
                  <th class="cols">{{stage.pays}}</th>
                  <th class="cols" v-if="stage.status === 'En attente'"><span class="attente">{{stage.status}}</span></th>
                  <th class="cols" v-if="stage.status === 'Entretien'"><span class="entretien">{{stage.status}}</span></th>
                  <th class="cols" v-if="stage.status === 'Accepté'"><span class="accepte">{{stage.status}}</span></th>
                  <th class="cols" v-if="stage.status === 'Refusé'"><span class="refus">{{stage.status}}</span></th>
                  <th class="seeMore">
                      <a :href="route('showStage', stage.id)"><img src="img/see.png" alt="See" title="Voir"></a>
                      <a :href="route('editStage', stage.id)"><img src="img/editing.png" alt="Edit" title="Editer"></a>
                      <img src="img/trash.png" alt="Delete" title="Supprimer" @click="deleted(stage.id)">
                  </th>
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

    #addStage {
        width: 95%;
        display: flex;
        justify-content: right;
    }

    #addStage a {
        border: black 2px solid;
        padding: 8px 16px;
        color: white;
        background-color: #6b22e3;
    }

    #addStage a:hover {
        background-color: white;
        border: #6b22e3 2px solid;
        color: black;
        transition: 0.15s;
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
        font-weight: bold;
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
        width: 12%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        font-weight: bold;
    }

    .seeMore img{
        width: 32px;
        height: 32px;
        cursor: pointer;
    }

    .ligne {
        border-bottom: 1px rgb(177, 177, 177) solid;
        height: 72px;
    }

    .attente {
        background-color: #6b22e3;
        color: white;
        padding: 0 8px;
        border-radius: 10px;
    }

    .entretien {
        background-color: #f7d308;
        color: black;
        padding: 0 8px;
        border-radius: 10px;
    }

    .accepte {
        background-color: #2a8805;
        color: white;
        padding: 0 8px;
        border-radius: 10px;
    }

    .refus {
        background-color: #910a00;
        color: white;
        padding: 0 8px;
        border-radius: 10px;
    }
</style>

<script>
import { defineComponent } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";

export default defineComponent({
  components: {
    JetApplicationLogo,
  },
  props: ["stages"],
  methods: {
    deleted(id) {
        this.$inertia.post(this.route("deleteStage", id));
    },
  }
});
</script>
