<template>
    <h2 id="firstTitle">{{stages.entreprise}} ({{stages.poste}})</h2>
    <div class="container">
        <h3>Ville :</h3>
        <p>{{stages.ville}}</p>
    </div>
    <div class="container">
        <h3>Pays :</h3>
        <p>{{stages.pays}}</p>
    </div>
    <div class="container">
        <h3>Description :</h3>
        <p>{{stages.description}}</p>
    </div>
    <div class="container">
        <h3>Status :</h3>
        <p>{{stages.status}}</p>
    </div>
    <div id="showButton">
        <a @click="deleted(stages.id)" class="delete">Supprimer</a>
        <a :href="route('editStage', stages.id)" class="edit">Editer</a>
    </div>
</template>

<style scoped>
    #firstTitle {
        font-size: 28px;
        margin: 24px 0 0 24px;
    }

    .container {
        width: 95%;
        margin: 24px auto 0 auto;
    }

    .container h3 {
        font-weight: bold;
    }

    #showButton {
        display: flex;
        justify-content: right;
        width: 95%;
        padding-bottom: 48px;
        margin-top: 24px;
    }

    .delete{
        margin: 0 12px;
        border: solid 1px black;
        padding: 5px 10px;
        background-color: rgb(153, 11, 11);
        color: white;
        cursor: pointer;
    }

    .edit{
        margin: 0 12px;
        border: solid 1px black;
        padding: 5px 10px;
        background-color: #6b22e3;
        color: white;
    }
</style>

<script>
import { defineComponent } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";

export default defineComponent({
  components: {
    JetApplicationLogo,
  },
  props: ['stages'],
  data() {
    return {
      form: this.$inertia.form({
        entreprise: null,
        poste: null,
        ville: null,
        pays: null,
        status: null,
        description: null,
      }),
    };
  },
  methods: {
    submit() {
      this.$inertia.post(this.route("createStagePost"), this.form);
    },
    deleted(id) {
        this.$inertia.post(this.route("deleteStage", id));
    },
  },
});
</script>
