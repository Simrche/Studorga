<template>
    <h2 id="firstTitle">Ajouter un stage :</h2>
    <form action="">
        <div class="formInputDiv">
            <label for="entreprise">Entreprise :</label>
            <input type="text" name="entreprise">
        </div>
        <div class="formInputDiv">
            <label for="poste">Poste :</label>
            <input type="text" name="poste">
        </div>
        <div class="formInputDiv">
            <label for="ville">Ville :</label>
            <input type="text" name="ville">
        </div>
        <div class="formInputDiv">
            <label for="pays">Pays :</label>
            <input type="text" name="pays">
        </div>
        <div class="formInputDiv">
            <label for="status">Status :</label>
            <input type="text" name="status">
        </div>
        <div class="formInputDiv">
            <label for="description">Description :</label>
            <textarea name="description"></textarea>
        </div>
        <div id="formButton">
            <a :href="route('dashboard')" class="cancel">Annuler</a>
            <input type="submit" value="Ajouter" @click="submit" id="submit">
        </div>
    </form>
</template>

<style scoped>
    #firstTitle {
        font-size: 28px;
        margin: 24px 0 0 24px;
    }

    form {
        width: 90%;
        margin: 12px auto 0 auto;
        padding-bottom: 48px;
    }

    .formInputDiv {
        display: flex;
        flex-direction: column;
        margin-top: 12px;
    }

    .formInputDiv input {
        margin-top: 8px
    }

    #formButton {
        width: 100%;
        display: flex;
        justify-content: right;
        margin-top: 48px;
    }

    .cancel {
        color: white;
        background-color: rgb(155, 0, 0);
        border: black 1px solid;
        padding: 5px 10px;
        margin-right: 24px;
        width: 80px;
    }

    #submit {
        color: white;
        background-color: #6b22e3;
        border: solid black 1px;
        padding: 5px 10px;
        width: 80px;
        cursor: pointer;
    }
</style>

<script>
import { defineComponent } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";

export default defineComponent({
  components: {
    JetApplicationLogo,
  },
});
</script>
