<php?
public function up(): void {
    Schema::create('producto', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->decimal('precio', 8, 2);
        $table->foreignId('categoria_id')->constrained('categoria')->onDelete('cascade');
        $table->timestamps();
    });
}