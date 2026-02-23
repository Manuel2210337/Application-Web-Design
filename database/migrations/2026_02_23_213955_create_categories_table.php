<php?

public function up(): void {
    Schema::create('categoria', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->timestamps();
    });
}