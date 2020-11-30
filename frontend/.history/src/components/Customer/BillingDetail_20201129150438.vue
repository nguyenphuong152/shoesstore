<template>
          <v-form ref="form" v-model="valid" lazy-validation>
            <v-text-field
              v-model="name"
              :counter="10"
              :rules="nameRules"
              label="Name"
              required
            ></v-text-field>

            <v-text-field
              v-model="email"
              :rules="emailRules"
              label="E-mail"
              required
            ></v-text-field>
            <v-text-field
              v-model="country"
              label="Country"
              required
            ></v-text-field>
            <v-text-field
              v-model="company"
              label="Company"
            ></v-text-field>
            <v-text-field
              v-model="address"
              label="Address"
              required
            ></v-text-field>
            <v-text-field
              v-model="phone"
              label="Phone"
              required
            ></v-text-field>
            <br>
            <v-checkbox
              v-model="checkbox"
              label="Do you want to create an account?"
              required
            ></v-checkbox>
            <v-btn
              :disabled="!valid"
              color="black"
              class="mr-4 white--text slogan-3 text-transform-lowercase"
              @click="validate"
            >
              Register
            </v-btn>

          </v-form>
</template>

<script>
export default {
    data: () => ({
      valid: true,
      name: '',
      nameRules: [
        v => !!v || 'Name is required',
        v => (v && v.length <= 10) || 'Name must be less than 10 characters',
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
      ],
      
      checkbox: false,
    }),

    methods: {
      validate () {
        this.$refs.form.validate()
      },
      reset () {
        this.$refs.form.reset()
      },
    },
}
</script>

<style>

</style>    