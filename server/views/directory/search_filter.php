<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container-fluid cover">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="search-heading">Discover Bataan</h1>
            <label for="name" class="search-filter-label">Search</label>
            <input type="text" class="form-control form-control-lg search-bar" aria-describedby="helpId" id="name" placeholder="Search Establishments..." v-model="name">
            <small id="helpId" class="form-text text-light">Ex. Starbucks, Beanery, PowerMac</small>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="search-filter-label">Location</label>
                    <select class="form-control form-control-lg" v-model="location">
                        <option value="">All</option>
                        <option v-for="location in locationOptions" :value="location">{{ location }}</option>
                    </select> 
                </div> 
                <div class="col-md-6">
                    <label for="" class="search-filter-label">Category</label>
                    <select class="form-control form-control-lg" v-model="category">
                        <option value="">All</option>
                        <option v-for="category in categoryOptions" :value="category">{{ category }}</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <button type="button" name="" id="" class="btn btn-warning btn-lg btn-block search-btn" v-on:click="searchEstablishments">Search</button>
                </div>
            </div>
        </div>
    </div>   
</div>
