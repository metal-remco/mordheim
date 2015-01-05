<?php
 
//
// NOTE Migration Created: 2015-01-05 23:07:00
// --------------------------------------------------
 
class CreateWargamingDatabase {
//
// NOTE - Make changes to the database.
// --------------------------------------------------
 
public function up()
{

//
// NOTE -- armour
// --------------------------------------------------
 
Schema::create('armour', function($table) {
 $table->increments('id');
 });


//
// NOTE -- injuries
// --------------------------------------------------
 
Schema::create('injuries', function($table) {
 $table->increments('id');
 });


//
// NOTE -- inventory
// --------------------------------------------------
 
Schema::create('inventory', function($table) {
 $table->increments('id');
 });


//
// NOTE -- model
// --------------------------------------------------
 
Schema::create('model', function($table) {
 $table->increments('id');
 $table->unsignedInteger('warband_id');
 $table->string('name', 45)->nullable();
 $table->unsignedInteger('movement');
 $table->unsignedInteger('weapon skill');
 $table->unsignedInteger('ballistic skill');
 $table->unsignedInteger('strength');
 $table->unsignedInteger('toughness');
 $table->unsignedInteger('wound');
 $table->unsignedInteger('initiative');
 $table->unsignedInteger('attacks');
 $table->unsignedInteger('leadership');
 $table->unsignedInteger('experience');
 });


//
// NOTE -- model_has_armour
// --------------------------------------------------
 
Schema::create('model_has_armour', function($table) {
 $table->increments('model_id');
 $table->increments('armour_id');
 });


//
// NOTE -- model_has_injuries
// --------------------------------------------------
 
Schema::create('model_has_injuries', function($table) {
 $table->increments('model_id');
 $table->increments('injuries_id');
 });


//
// NOTE -- model_has_skills
// --------------------------------------------------
 
Schema::create('model_has_skills', function($table) {
 $table->increments('model_id');
 $table->increments('skills_id');
 });


//
// NOTE -- model_has_spells
// --------------------------------------------------
 
Schema::create('model_has_spells', function($table) {
 $table->increments('model_id');
 $table->increments('spells_id');
 });


//
// NOTE -- model_has_weapon
// --------------------------------------------------
 
Schema::create('model_has_weapon', function($table) {
 $table->increments('model_id');
 $table->increments('weapon_id');
 });


//
// NOTE -- skills
// --------------------------------------------------
 
Schema::create('skills', function($table) {
 $table->increments('id');
 });


//
// NOTE -- spells
// --------------------------------------------------
 
Schema::create('spells', function($table) {
 $table->increments('id');
 });


//
// NOTE -- typewarband
// --------------------------------------------------
 
Schema::create('typewarband', function($table) {
 $table->increments('id');
 $table->string('name', 45)->nullable();
 });


//
// NOTE -- user
// --------------------------------------------------
 
Schema::create('user', function($table) {
 $table->increments('id');
 $table->string('name', 20)->unique();
 });


//
// NOTE -- warband
// --------------------------------------------------
 
Schema::create('warband', function($table) {
 $table->increments('id');
 $table->unsignedInteger('user_id');
 $table->increments('inventory_id');
 $table->increments('typewarband_id');
 $table->string('name', 45)->nullable();
 $table->unsignedInteger('rating');
 });


//
// NOTE -- weapon
// --------------------------------------------------
 
Schema::create('weapon', function($table) {
 $table->increments('id');
 });


//
// NOTE -- model_foreign
// --------------------------------------------------
 
Schema::table('model', function($table) {
 $table->foreign('warband_id')->references('id')->on('warband');
 });


//
// NOTE -- model_has_armour_foreign
// --------------------------------------------------
 
Schema::table('model_has_armour', function($table) {
 $table->foreign('armour_id')->references('id')->on('armour');
 $table->foreign('model_id')->references('id')->on('model');
 });


//
// NOTE -- model_has_injuries_foreign
// --------------------------------------------------
 
Schema::table('model_has_injuries', function($table) {
 $table->foreign('injuries_id')->references('id')->on('injuries');
 $table->foreign('model_id')->references('id')->on('model');
 });


//
// NOTE -- model_has_skills_foreign
// --------------------------------------------------
 
Schema::table('model_has_skills', function($table) {
 $table->foreign('model_id')->references('id')->on('model');
 $table->foreign('skills_id')->references('id')->on('skills');
 });


//
// NOTE -- model_has_spells_foreign
// --------------------------------------------------
 
Schema::table('model_has_spells', function($table) {
 $table->foreign('model_id')->references('id')->on('model');
 $table->foreign('spells_id')->references('id')->on('spells');
 });


//
// NOTE -- model_has_weapon_foreign
// --------------------------------------------------
 
Schema::table('model_has_weapon', function($table) {
 $table->foreign('model_id')->references('id')->on('model');
 $table->foreign('weapon_id')->references('id')->on('weapon');
 });


//
// NOTE -- warband_foreign
// --------------------------------------------------
 
Schema::table('warband', function($table) {
 $table->foreign('inventory_id')->references('id')->on('inventory');
 $table->foreign('typewarband_id')->references('id')->on('typewarband');
 $table->foreign('user_id')->references('id')->on('user');
 });



}
 
//
// NOTE - Revert the changes to the database.
// --------------------------------------------------
 
public function down()
{

Schema::drop('armour');
Schema::drop('injuries');
Schema::drop('inventory');
Schema::drop('model');
Schema::drop('model_has_armour');
Schema::drop('model_has_injuries');
Schema::drop('model_has_skills');
Schema::drop('model_has_spells');
Schema::drop('model_has_weapon');
Schema::drop('skills');
Schema::drop('spells');
Schema::drop('typewarband');
Schema::drop('user');
Schema::drop('warband');
Schema::drop('weapon');

}
}