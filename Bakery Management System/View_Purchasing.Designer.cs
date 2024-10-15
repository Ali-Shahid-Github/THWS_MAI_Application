namespace Bakery_Management_System
{
    partial class View_Purchasing
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
            this.label = new ns1.BunifuCustomLabel();
            this.panel1 = new System.Windows.Forms.Panel();
            this.label3 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.up_pur = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.up_pur_id = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.dataGridView_Purchasing = new System.Windows.Forms.DataGridView();
            this.purIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.purDateDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.purTimeDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.purAmountDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.catIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.supIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.pURCHASINGBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.bMASDataSet1 = new Bakery_Management_System.BMASDataSet1();
            this.pURCHASINGTableAdapter = new Bakery_Management_System.BMASDataSet1TableAdapters.PURCHASINGTableAdapter();
            this.up_sup_id_combo_box = new System.Windows.Forms.ComboBox();
            this.bunifuCustomLabel1 = new ns1.BunifuCustomLabel();
            this.bunifuCustomLabel3 = new ns1.BunifuCustomLabel();
            this.up_pur_amount = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.panel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView_Purchasing)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pURCHASINGBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).BeginInit();
            this.SuspendLayout();
            // 
            // up_cat_id_combo_box
            // 
            this.up_cat_id_combo_box.BackColor = System.Drawing.SystemColors.Control;
            this.up_cat_id_combo_box.FormattingEnabled = true;
            this.up_cat_id_combo_box.Location = new System.Drawing.Point(6, 287);
            this.up_cat_id_combo_box.Name = "up_cat_id_combo_box";
            this.up_cat_id_combo_box.Size = new System.Drawing.Size(134, 21);
            this.up_cat_id_combo_box.TabIndex = 141;
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
            this.bunifuCustomLabel6.Location = new System.Drawing.Point(6, 256);
            this.bunifuCustomLabel6.Name = "bunifuCustomLabel6";
            this.bunifuCustomLabel6.Size = new System.Drawing.Size(112, 21);
            this.bunifuCustomLabel6.TabIndex = 140;
            this.bunifuCustomLabel6.Text = " Category ID";
            this.bunifuCustomLabel6.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
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
            this.label.Location = new System.Drawing.Point(6, 37);
            this.label.Name = "label";
            this.label.Size = new System.Drawing.Size(29, 21);
            this.label.TabIndex = 136;
            this.label.Text = "ID";
            this.label.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.SystemColors.Desktop;
            this.panel1.Controls.Add(this.label3);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Location = new System.Drawing.Point(170, 1);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(640, 54);
            this.panel1.TabIndex = 137;
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
            // up_pur
            // 
            this.up_pur.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.up_pur.DialogResult = System.Windows.Forms.DialogResult.OK;
            this.up_pur.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.up_pur.Location = new System.Drawing.Point(7, 322);
            this.up_pur.Name = "up_pur";
            this.up_pur.Size = new System.Drawing.Size(133, 23);
            this.up_pur.TabIndex = 133;
            this.up_pur.Text = "Update";
            this.up_pur.UseVisualStyleBackColor = false;
            this.up_pur.Click += new System.EventHandler(this.up_pur_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label1.Location = new System.Drawing.Point(3, 6);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(64, 22);
            this.label1.TabIndex = 134;
            this.label1.Text = "Update";
            // 
            // up_pur_id
            // 
            this.up_pur_id.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_pur_id.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_pur_id.BackColor = System.Drawing.SystemColors.ControlLight;
            this.up_pur_id.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_pur_id.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_pur_id.Enabled = false;
            this.up_pur_id.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_pur_id.Location = new System.Drawing.Point(6, 66);
            this.up_pur_id.Name = "up_pur_id";
            this.up_pur_id.ReadOnly = true;
            this.up_pur_id.Size = new System.Drawing.Size(134, 23);
            this.up_pur_id.TabIndex = 135;
            // 
            // dataGridView_Purchasing
            // 
            this.dataGridView_Purchasing.AllowUserToAddRows = false;
            this.dataGridView_Purchasing.AllowUserToDeleteRows = false;
            this.dataGridView_Purchasing.AutoGenerateColumns = false;
            this.dataGridView_Purchasing.BackgroundColor = System.Drawing.SystemColors.Desktop;
            this.dataGridView_Purchasing.BorderStyle = System.Windows.Forms.BorderStyle.None;
            dataGridViewCellStyle1.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle1.BackColor = System.Drawing.SystemColors.MenuHighlight;
            dataGridViewCellStyle1.Font = new System.Drawing.Font("Sitka Display", 10F);
            dataGridViewCellStyle1.ForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.Padding = new System.Windows.Forms.Padding(0, 1, 0, 1);
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle1.SelectionForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dataGridView_Purchasing.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle1;
            this.dataGridView_Purchasing.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView_Purchasing.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.purIDDataGridViewTextBoxColumn,
            this.purDateDataGridViewTextBoxColumn,
            this.purTimeDataGridViewTextBoxColumn,
            this.purAmountDataGridViewTextBoxColumn,
            this.catIDDataGridViewTextBoxColumn,
            this.supIDDataGridViewTextBoxColumn});
            this.dataGridView_Purchasing.DataSource = this.pURCHASINGBindingSource;
            dataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.White;
            dataGridViewCellStyle2.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle2.ForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle2.SelectionBackColor = System.Drawing.SystemColors.Highlight;
            dataGridViewCellStyle2.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dataGridView_Purchasing.DefaultCellStyle = dataGridViewCellStyle2;
            this.dataGridView_Purchasing.EnableHeadersVisualStyles = false;
            this.dataGridView_Purchasing.GridColor = System.Drawing.SystemColors.ActiveCaption;
            this.dataGridView_Purchasing.Location = new System.Drawing.Point(168, 54);
            this.dataGridView_Purchasing.Name = "dataGridView_Purchasing";
            this.dataGridView_Purchasing.ReadOnly = true;
            this.dataGridView_Purchasing.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.Single;
            this.dataGridView_Purchasing.Size = new System.Drawing.Size(642, 301);
            this.dataGridView_Purchasing.TabIndex = 132;
            this.dataGridView_Purchasing.CellMouseDoubleClick += new System.Windows.Forms.DataGridViewCellMouseEventHandler(this.dataGridView_Purchasing_CellMouseDoubleClick);
            this.dataGridView_Purchasing.RowEnter += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView_Purchasing_RowEnter);
            // 
            // purIDDataGridViewTextBoxColumn
            // 
            this.purIDDataGridViewTextBoxColumn.DataPropertyName = "Pur_ID";
            this.purIDDataGridViewTextBoxColumn.HeaderText = "Pur_ID";
            this.purIDDataGridViewTextBoxColumn.Name = "purIDDataGridViewTextBoxColumn";
            this.purIDDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // purDateDataGridViewTextBoxColumn
            // 
            this.purDateDataGridViewTextBoxColumn.DataPropertyName = "Pur_Date";
            this.purDateDataGridViewTextBoxColumn.HeaderText = "Pur_Date";
            this.purDateDataGridViewTextBoxColumn.Name = "purDateDataGridViewTextBoxColumn";
            this.purDateDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // purTimeDataGridViewTextBoxColumn
            // 
            this.purTimeDataGridViewTextBoxColumn.DataPropertyName = "Pur_Time";
            this.purTimeDataGridViewTextBoxColumn.HeaderText = "Pur_Time";
            this.purTimeDataGridViewTextBoxColumn.Name = "purTimeDataGridViewTextBoxColumn";
            this.purTimeDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // purAmountDataGridViewTextBoxColumn
            // 
            this.purAmountDataGridViewTextBoxColumn.DataPropertyName = "Pur_Amount";
            this.purAmountDataGridViewTextBoxColumn.HeaderText = "Pur_Amount";
            this.purAmountDataGridViewTextBoxColumn.Name = "purAmountDataGridViewTextBoxColumn";
            this.purAmountDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // catIDDataGridViewTextBoxColumn
            // 
            this.catIDDataGridViewTextBoxColumn.DataPropertyName = "Cat_ID";
            this.catIDDataGridViewTextBoxColumn.HeaderText = "Cat_ID";
            this.catIDDataGridViewTextBoxColumn.Name = "catIDDataGridViewTextBoxColumn";
            this.catIDDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // supIDDataGridViewTextBoxColumn
            // 
            this.supIDDataGridViewTextBoxColumn.DataPropertyName = "Sup_ID";
            this.supIDDataGridViewTextBoxColumn.HeaderText = "Sup_ID";
            this.supIDDataGridViewTextBoxColumn.Name = "supIDDataGridViewTextBoxColumn";
            this.supIDDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // pURCHASINGBindingSource
            // 
            this.pURCHASINGBindingSource.DataMember = "PURCHASING";
            this.pURCHASINGBindingSource.DataSource = this.bMASDataSet1;
            // 
            // bMASDataSet1
            // 
            this.bMASDataSet1.DataSetName = "BMASDataSet1";
            this.bMASDataSet1.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // pURCHASINGTableAdapter
            // 
            this.pURCHASINGTableAdapter.ClearBeforeFill = true;
            // 
            // up_sup_id_combo_box
            // 
            this.up_sup_id_combo_box.BackColor = System.Drawing.SystemColors.Control;
            this.up_sup_id_combo_box.FormattingEnabled = true;
            this.up_sup_id_combo_box.Location = new System.Drawing.Point(7, 215);
            this.up_sup_id_combo_box.Name = "up_sup_id_combo_box";
            this.up_sup_id_combo_box.Size = new System.Drawing.Size(133, 21);
            this.up_sup_id_combo_box.TabIndex = 147;
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
            this.bunifuCustomLabel1.Location = new System.Drawing.Point(6, 178);
            this.bunifuCustomLabel1.Name = "bunifuCustomLabel1";
            this.bunifuCustomLabel1.Size = new System.Drawing.Size(103, 21);
            this.bunifuCustomLabel1.TabIndex = 146;
            this.bunifuCustomLabel1.Text = "Supplier ID";
            this.bunifuCustomLabel1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // bunifuCustomLabel3
            // 
            this.bunifuCustomLabel3.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel3.AutoSize = true;
            this.bunifuCustomLabel3.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel3.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel3.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel3.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel3.Location = new System.Drawing.Point(7, 104);
            this.bunifuCustomLabel3.Name = "bunifuCustomLabel3";
            this.bunifuCustomLabel3.Size = new System.Drawing.Size(75, 21);
            this.bunifuCustomLabel3.TabIndex = 143;
            this.bunifuCustomLabel3.Text = "Amount";
            this.bunifuCustomLabel3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_pur_amount
            // 
            this.up_pur_amount.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_pur_amount.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_pur_amount.BackColor = System.Drawing.SystemColors.Control;
            this.up_pur_amount.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_pur_amount.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_pur_amount.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_pur_amount.Location = new System.Drawing.Point(6, 139);
            this.up_pur_amount.Name = "up_pur_amount";
            this.up_pur_amount.Size = new System.Drawing.Size(134, 23);
            this.up_pur_amount.TabIndex = 142;
            // 
            // View_Purchasing
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.AutoScroll = true;
            this.ClientSize = new System.Drawing.Size(811, 359);
            this.Controls.Add(this.up_sup_id_combo_box);
            this.Controls.Add(this.bunifuCustomLabel1);
            this.Controls.Add(this.bunifuCustomLabel3);
            this.Controls.Add(this.up_pur_amount);
            this.Controls.Add(this.up_cat_id_combo_box);
            this.Controls.Add(this.bunifuCustomLabel6);
            this.Controls.Add(this.label);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.up_pur);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.up_pur_id);
            this.Controls.Add(this.dataGridView_Purchasing);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "View_Purchasing";
            this.ShowInTaskbar = false;
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "View_Purchasing";
            this.Load += new System.EventHandler(this.View_Purchasing_Load);
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView_Purchasing)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pURCHASINGBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.ComboBox up_cat_id_combo_box;
        private ns1.BunifuCustomLabel bunifuCustomLabel6;
        private ns1.BunifuCustomLabel label;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Button up_pur;
        private System.Windows.Forms.Label label1;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_pur_id;
        private System.Windows.Forms.DataGridView dataGridView_Purchasing;
        private BMASDataSet1 bMASDataSet1;
        private System.Windows.Forms.BindingSource pURCHASINGBindingSource;
        private BMASDataSet1TableAdapters.PURCHASINGTableAdapter pURCHASINGTableAdapter;
        private System.Windows.Forms.DataGridViewTextBoxColumn purIDDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn purDateDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn purTimeDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn purAmountDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn catIDDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn supIDDataGridViewTextBoxColumn;
        private System.Windows.Forms.ComboBox up_sup_id_combo_box;
        private ns1.BunifuCustomLabel bunifuCustomLabel1;
        private ns1.BunifuCustomLabel bunifuCustomLabel3;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_pur_amount;
    }
}