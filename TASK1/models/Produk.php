<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id_produk
 * @property int $kategori_id
 * @property int $supplier_id
 * @property string $nama_produk
 * @property string $satuan
 * @property int $stok
 * @property float $harga_produk
 *
 * @property Kategori $kategori
 * @property Supplier $supplier
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori_id', 'supplier_id', 'nama_produk', 'satuan', 'stok', 'harga_produk'], 'required'],
            [['kategori_id', 'supplier_id', 'stok'], 'integer'],
            [['harga_produk'], 'number'],
            [['nama_produk', 'satuan'], 'string', 'max' => 100],
            [['kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['kategori_id' => 'id_kategori']],
            [['supplier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['supplier_id' => 'id_supplier']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_produk' => 'Id Produk',
            'kategori_id' => 'Kategori ID',
            'supplier_id' => 'Supplier ID',
            'nama_produk' => 'Nama Produk',
            'satuan' => 'Satuan',
            'stok' => 'Stok',
            'harga_produk' => 'Harga Produk',
        ];
    }

    /**
     * Gets query for [[Kategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['id_kategori' => 'kategori_id']);
    }

    /**
     * Gets query for [[Supplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id_supplier' => 'supplier_id']);
    }
}
