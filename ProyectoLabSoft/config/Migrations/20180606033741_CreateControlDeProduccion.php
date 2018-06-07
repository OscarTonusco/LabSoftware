<?php
use Migrations\AbstractMigration;

class CreateControlManObra extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('control_de_produccion');
        $table->addColumn('fecha', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('Maquina_NUmero', 'string', [
            'default' => null,
            'limit' => 30,
            'null' => false,
        ]);
        $table->addColumn('producto', 'string', [
            'default' => null,
            'limit' => 30,
            'null' => false,
        ]);
        $table->addColumn('color', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('material', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => false,
        ]);
        $table->addColumn('talla', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('cantidad', 'integer', [
            'default' => null,
            'limit' => 5,
            'null' => false,

        ]);
        $table->addColumn('Numero_orden', 'string', [
            'default' => null,
            'limit' => 30,
            'null' => false,
        ]);
        $table->addColumn('ref', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false,
        ]);
        $table->addColumn('cliente', 'string', [
            'default' => null,
            'limit' => 60,
            'null' => false,
        ]);
        $table->addColumn('hora_inicio_Limpieza', 'string', [
            'default' => null,
            'limit' => 60,
            'null' => false,
        ]);
        $table->addColumn('hora_final_Limpieza', 'string', [
            'default' => null,
            'limit' => 60,
            'null' => false,
        ]);
        $table->addColumn('hora_inicio_Producto', 'string', [
            'default' => null,
            'limit' => 60,
            'null' => false,
        ]);
        $table->addColumn('hora_final_Producto', 'string', [
            'default' => null,
            'limit' => 60,
            'null' => false,
        ]);
        $table->create();

        $refTable = $this->table('control_De_Produccion');
        $refTable->addColumn('user_id', 'integer', array('signed' => 'disable'))
                 ->addForeignkey('user_id', 'users', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
    }
}
