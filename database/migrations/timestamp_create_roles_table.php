public function up()
{
    Schema::create('roles', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->timestamps();
        $table->foreignId('role_id')->constrained()->default(3);

    });

    // Rol əlavə edək
    DB::table('roles')->insert([
        ['name' => 'admin'],
        ['name' => 'driver'],
        ['name' => 'customer'],
    ]);
}
