<template>
  <div id="app">
    <div>
      <v-card color="primary" flat height="200px" tile>
        <v-toolbar extended extension-height="80">
          <v-toolbar-title id="logo">MewGo</v-toolbar-title>
          <v-spacer></v-spacer>
          <v-toolbar-items id = "searchbar" >
            <v-text-field
              v-model="search"
              append-icon="mdi-magnify"
              label="Search"
              outlined
              single-line
              hide-details
            ></v-text-field>
          </v-toolbar-items>
        </v-toolbar>
         <v-toolbar id="nav">
            <v-card color="primary" flat tile>
                <v-button-items>
                  <router-link to="/">Home</router-link> 
                  <router-link to="/about">About</router-link>
                </v-button-items>
            </v-card>
          </v-toolbar>
      </v-card>
    </div>
    <router-view />
  </div>
</template>
