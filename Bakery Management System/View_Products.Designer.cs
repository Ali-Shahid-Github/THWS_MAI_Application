namespace Bakery_Management_System
{
    partial class View_Products
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle1 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle2 = new System.Windows.Forms.DataGridViewCellStyle();
            this.up_cat_id_combo_box = new System.Windows.Forms.ComboBox();
            this.bunifuCustomLabel6 = new ns1.BunifuCustomLabel();
            this.bunifuCustomLabel8 = new ns1.BunifuCustomLabel();
            this.up_pro_name = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.label = new ns1.BunifuCustomLabel();
            this.panel1 = new System.Windows.Forms.Panel();
            this.label3 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.up_pro = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.up_pro_id = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.dataGridView_Products = new System.Windows.Forms.DataGridView();
            this.Pro_ID = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.Product_Name = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.Product_Stock = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.Category_ID = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.Cat_Name = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.pRODUCTSBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.bMASDataSet1 = new Bakery_Management_System.BMASDataSet1();
            this.pRODUCTSTableAdapter = new Bakery_Management_System.BMASDataSet1TableAdapters.PRODUCTSTableAdapter();
            this.bunifuCustomLabel1 = new ns1.BunifuCustomLabel();
            this.up_pro_stock = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.panel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView_Products)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pRODUCTSBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).BeginInit();
            this.SuspendLayout();
            // 
            // up_cat_id_combo_box
            // 
            this.up_cat_id_combo_box.BackColor = System.Drawing.SystemColors.Control;
            this.up_cat_id_combo_box.FormattingEnabled = true;
            this.up_cat_id_combo_box.Location = new System.Drawing.Point(3, 281);
            this.up_cat_id_combo_box.Name = "up_cat_id_combo_box";
            this.up_cat_id_combo_box.Size = new System.Drawing.Size(134, 21);
            this.up_cat_id_combo_box.TabIndex = 129;
            // 
            // bunifuCustomLabel6
            // 
            this.bunifuCustomLabel6.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel6.AutoSize = true;
            this.bunifuCustomLabel6.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel6.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel6.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel6.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel6.Location = new System.Drawing.Point(3, 250);
            this.bunifuCustomLabel6.Name = "bunifuCustomLabel6";
            this.bunifuCustomLabel6.Size = new System.Drawing.Size(112, 21);
            this.bunifuCustomLabel6.TabIndex = 127;
            this.bunifuCustomLabel6.Text = " Category ID";
            this.bunifuCustomLabel6.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // bunifuCustomLabel8
            // 
            this.bunifuCustomLabel8.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel8.AutoSize = true;
            this.bunifuCustomLabel8.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel8.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel8.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel8.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel8.Location = new System.Drawing.Point(4, 99);
            this.bunifuCustomLabel8.Name = "bunifuCustomLabel8";
            this.bunifuCustomLabel8.Size = new System.Drawing.Size(58, 21);
            this.bunifuCustomLabel8.TabIndex = 125;
            this.bunifuCustomLabel8.Text = "Name";
            this.bunifuCustomLabel8.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_pro_name
            // 
            this.up_pro_name.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_pro_name.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_pro_name.BackColor = System.Drawing.SystemColors.Control;
            this.up_pro_name.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_pro_name.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_pro_name.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_pro_name.Location = new System.Drawing.Point(3, 129);
            this.up_pro_name.Name = "up_pro_name";
            this.up_pro_name.Size = new System.Drawing.Size(133, 23);
            this.up_pro_name.TabIndex = 120;
            // 
            // label
            // 
            this.label.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.label.AutoSize = true;
            this.label.BackColor = System.Drawing.Color.Transparent;
            this.label.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.label.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.label.Location = new System.Drawing.Point(3, 31);
            this.label.Name = "label";
            this.label.Size = new System.Drawing.Size(29, 21);
            this.label.TabIndex = 118;
            this.label.Text = "ID";
            this.label.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.SystemColors.Desktop;
            this.panel1.Controls.Add(this.label3);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Location = new System.Drawing.Point(168, -5);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(630, 54);
            this.panel1.TabIndex = 119;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label3.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label3.Location = new System.Drawing.Point(205, 20);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(240, 22);
            this.label3.TabIndex = 130;
            this.label3.Text = "Double Click on record, to delete";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label2.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label2.Location = new System.Drawing.Point(175, 59);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(240, 22);
            this.label2.TabIndex = 88;
            this.label2.Text = "Double Click on record, to delete";
            // 
            // up_pro
            // 
            this.up_pro.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.up_pro.DialogResult = System.Windows.Forms.DialogResult.OK;
            this.up_pro.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.up_pro.Location = new System.Drawing.Point(4, 316);
            this.up_pro.Name = "up_pro";
            this.up_pro.Size = new System.Drawing.Size(133, 23);
            this.up_pro.TabIndex = 115;
            this.up_pro.Text = "Update";
            this.up_pro.UseVisualStyleBackColor = false;
            this.up_pro.Click += new System.EventHandler(this.up_pro_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label1.Location = new System.Drawing.Point(0, 0);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(64, 22);
            this.label1.TabIndex = 116;
            this.label1.Text = "Update";
            // 
            // up_pro_id
            // 
            this.up_pro_id.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_pro_id.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_pro_id.BackColor = System.Drawing.SystemColors.ControlLight;
            this.up_pro_id.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_pro_id.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_pro_id.Enabled = false;
            this.up_pro_id.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_pro_id.Location = new System.Drawing.Point(3, 60);
            this.up_pro_id.Name = "up_pro_id";
            this.up_pro_id.ReadOnly = true;
            this.up_pro_id.Size = new System.Drawing.Size(133, 23);
            this.up_pro_id.TabIndex = 117;
            // 
            // dataGridView_Products
            // 
            this.dataGridView_Products.AllowUserToAddRows = false;
            this.dataGridView_Products.AllowUserToDeleteRows = false;
            this.dataGridView_Products.BackgroundColor = System.Drawing.SystemColors.Desktop;
            this.dataGridView_Products.BorderStyle = System.Windows.Forms.BorderStyle.None;
            dataGridViewCellStyle1.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle1.BackColor = System.Drawing.SystemColors.MenuHighlight;
            dataGridViewCellStyle1.Font = new System.Drawing.Font("Sitka Display", 10F);
            dataGridViewCellStyle1.ForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.Padding = new System.Windows.Forms.Padding(0, 1, 0, 1);
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle1.SelectionForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dataGridView_Products.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle1;
            this.dataGridView_Products.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView_Products.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.Pro_ID,
            this.Product_Name,
            this.Product_Stock,
            this.Category_ID,
            this.Cat_Name});
            dataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.White;
            dataGridViewCellStyle2.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle2.ForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle2.SelectionBackColor = System.Drawing.SystemColors.Highlight;
            dataGridViewCellStyle2.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dataGridView_Products.DefaultCellStyle = dataGridViewCellStyle2;
            this.dataGridView_Products.EnableHeadersVisualStyles = false;
            this.dataGridView_Products.GridColor = System.Drawing.SystemColors.ActiveCaption;
            this.dataGridView_Products.Location = new System.Drawing.Point(166, 48);
            this.dataGridView_Products.Name = "dataGridView_Products";
            this.dataGridView_Products.ReadOnly = true;
            this.dataGridView_Products.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.Single;
            this.dataGridView_Products.Size = new System.Drawing.Size(632, 301);
            this.dataGridView_Products.TabIndex = 114;
            this.dataGridView_Products.CellMouseDoubleClick += new System.Windows.Forms.DataGridViewCellMouseEventHandler(this.dataGridView_Products_CellMouseDoubleClick);
            this.dataGridView_Products.RowEnter += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView_Products_RowEnter);
            // 
            // Pro_ID
            // 
            this.Pro_ID.HeaderText = "Product_ID";
            this.Pro_ID.Name = "Pro_ID";
            this.Pro_ID.ReadOnly = true;
            // 
            // Product_Name
            // 
            this.Product_Name.HeaderText = "Product Name";
            this.Product_Name.Name = "Product_Name";
            this.Product_Name.ReadOnly = true;
            this.Product_Name.Width = 130;
            // 
            // Product_Stock
            // 
            this.Product_Stock.HeaderText = "Product Stock";
            this.Product_Stock.Name = "Product_Stock";
            this.Product_Stock.ReadOnly = true;
            this.Product_Stock.Width = 130;
            // 
            // Category_ID
            // 
            this.Category_ID.HeaderText = "Category ID";
            this.Category_ID.Name = "Category_ID";
            this.Category_ID.ReadOnly = true;
            // 
            // Cat_Name
            // 
            this.Cat_Name.HeaderText = "Category Name";
            this.Cat_Name.Name = "Cat_Name";
            this.Cat_Name.ReadOnly = true;
            this.Cat_Name.Width = 130;
            // 
            // pRODUCTSBindingSource
            // 
            this.pRODUCTSBindingSource.DataMember = "PRODUCTS";
            this.pRODUCTSBindingSource.DataSource = this.bMASDataSet1;
            // 
            // bMASDataSet1
            // 
            this.bMASDataSet1.DataSetName = "BMASDataSet1";
            this.bMASDataSet1.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // pRODUCTSTableAdapter
            // 
            this.pRODUCTSTableAdapter.ClearBeforeFill = true;
            // 
            // bunifuCustomLabel1
            // 
            this.bunifuCustomLabel1.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel1.AutoSize = true;
            this.bunifuCustomLabel1.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel1.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel1.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel1.Location = new System.Drawing.Point(5, 171);
            this.bunifuCustomLabel1.Name = "bunifuCustomLabel1";
            this.bunifuCustomLabel1.Size = new System.Drawing.Size(56, 21);
            this.bunifuCustomLabel1.TabIndex = 131;
            this.bunifuCustomLabel1.Text = "Stock";
            this.bunifuCustomLabel1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_pro_stock
            // 
            this.up_pro_stock.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_pro_stock.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_pro_stock.BackColor = System.Drawing.SystemColors.Control;
            this.up_pro_stock.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_pro_stock.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_pro_stock.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_pro_stock.Location = new System.Drawing.Point(4, 202);
            this.up_pro_stock.Name = "up_pro_stock";
            this.up_pro_stock.Size = new System.Drawing.Size(133, 23);
            this.up_pro_stock.TabIndex = 130;
            // 
            // View_Products
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.AutoScroll = true;
            this.ClientSize = new System.Drawing.Size(801, 358);
            this.Controls.Add(this.bunifuCustomLabel1);
            this.Controls.Add(this.up_pro_stock);
            this.Controls.Add(this.up_cat_id_combo_box);
            this.Controls.Add(this.bunifuCustomLabel6);
            this.Controls.Add(this.bunifuCustomLabel8);
            this.Controls.Add(this.up_pro_name);
            this.Controls.Add(this.label);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.up_pro);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.up_pro_id);
            this.Controls.Add(this.dataGridView_Products);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "View_Products";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "View_Products";
            this.Load += new System.EventHandler(this.View_Products_Load);
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView_Products)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pRODUCTSBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.ComboBox up_cat_id_combo_box;
        private ns1.BunifuCustomLabel bunifuCustomLabel6;
        private ns1.BunifuCustomLabel bunifuCustomLabel8;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_pro_name;
        private ns1.BunifuCustomLabel label;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Button up_pro;
        private System.Windows.Forms.Label label1;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_pro_id;
        private System.Windows.Forms.DataGridView dataGridView_Products;
        private BMASDataSet1 bMASDataSet1;
        private System.Windows.Forms.BindingSource pRODUCTSBindingSource;
        private BMASDataSet1TableAdapters.PRODUCTSTableAdapter pRODUCTSTableAdapter;
        private System.Windows.Forms.Label label3;
        private ns1.BunifuCustomLabel bunifuCustomLabel1;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_pro_stock;
        private System.Windows.Forms.DataGridViewTextBoxColumn Pro_ID;
        private System.Windows.Forms.DataGridViewTextBoxColumn Product_Name;
        private System.Windows.Forms.DataGridViewTextBoxColumn Product_Stock;
        private System.Windows.Forms.DataGridViewTextBoxColumn Category_ID;
        private System.Windows.Forms.DataGridViewTextBoxColumn Cat_Name;
    }
}