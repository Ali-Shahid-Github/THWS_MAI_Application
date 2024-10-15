namespace Bakery_Management_System
{
    partial class View_Invoice
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
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle5 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle6 = new System.Windows.Forms.DataGridViewCellStyle();
            this.up_pro_id_combo_box = new System.Windows.Forms.ComboBox();
            this.bunifuCustomLabel3 = new ns1.BunifuCustomLabel();
            this.up_sol_amount = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.up_inv = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.up_sol_id = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.label3 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.up_cus_id_combo_box = new System.Windows.Forms.ComboBox();
            this.label = new ns1.BunifuCustomLabel();
            this.panel1 = new System.Windows.Forms.Panel();
            this.dataGridView_Invoice = new System.Windows.Forms.DataGridView();
            this.bMASDataSet1 = new Bakery_Management_System.BMASDataSet1();
            this.sOLDBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.sOLDTableAdapter = new Bakery_Management_System.BMASDataSet1TableAdapters.SOLDTableAdapter();
            this.solIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.solDateDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.solTimeDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.solAmountDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.proIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.cusIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.bunifuCustomLabel1 = new ns1.BunifuCustomLabel();
            this.bunifuCustomLabel4 = new ns1.BunifuCustomLabel();
            this.panel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView_Invoice)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.sOLDBindingSource)).BeginInit();
            this.SuspendLayout();
            // 
            // up_pro_id_combo_box
            // 
            this.up_pro_id_combo_box.BackColor = System.Drawing.SystemColors.Control;
            this.up_pro_id_combo_box.FormattingEnabled = true;
            this.up_pro_id_combo_box.Location = new System.Drawing.Point(8, 214);
            this.up_pro_id_combo_box.Name = "up_pro_id_combo_box";
            this.up_pro_id_combo_box.Size = new System.Drawing.Size(133, 21);
            this.up_pro_id_combo_box.TabIndex = 159;
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
            this.bunifuCustomLabel3.Location = new System.Drawing.Point(8, 103);
            this.bunifuCustomLabel3.Name = "bunifuCustomLabel3";
            this.bunifuCustomLabel3.Size = new System.Drawing.Size(75, 21);
            this.bunifuCustomLabel3.TabIndex = 157;
            this.bunifuCustomLabel3.Text = "Amount";
            this.bunifuCustomLabel3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_sol_amount
            // 
            this.up_sol_amount.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_sol_amount.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_sol_amount.BackColor = System.Drawing.SystemColors.Control;
            this.up_sol_amount.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_sol_amount.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_sol_amount.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_sol_amount.Location = new System.Drawing.Point(7, 138);
            this.up_sol_amount.Name = "up_sol_amount";
            this.up_sol_amount.Size = new System.Drawing.Size(146, 23);
            this.up_sol_amount.TabIndex = 156;
            // 
            // up_inv
            // 
            this.up_inv.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.up_inv.DialogResult = System.Windows.Forms.DialogResult.OK;
            this.up_inv.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.up_inv.Location = new System.Drawing.Point(8, 321);
            this.up_inv.Name = "up_inv";
            this.up_inv.Size = new System.Drawing.Size(133, 23);
            this.up_inv.TabIndex = 149;
            this.up_inv.Text = "Update";
            this.up_inv.UseVisualStyleBackColor = false;
            this.up_inv.Click += new System.EventHandler(this.up_inv_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label1.Location = new System.Drawing.Point(4, 5);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(64, 22);
            this.label1.TabIndex = 150;
            this.label1.Text = "Update";
            // 
            // up_sol_id
            // 
            this.up_sol_id.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_sol_id.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_sol_id.BackColor = System.Drawing.SystemColors.ControlLight;
            this.up_sol_id.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_sol_id.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_sol_id.Enabled = false;
            this.up_sol_id.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_sol_id.Location = new System.Drawing.Point(7, 65);
            this.up_sol_id.Name = "up_sol_id";
            this.up_sol_id.ReadOnly = true;
            this.up_sol_id.Size = new System.Drawing.Size(146, 23);
            this.up_sol_id.TabIndex = 151;
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
            // up_cus_id_combo_box
            // 
            this.up_cus_id_combo_box.BackColor = System.Drawing.SystemColors.Control;
            this.up_cus_id_combo_box.FormattingEnabled = true;
            this.up_cus_id_combo_box.Location = new System.Drawing.Point(7, 286);
            this.up_cus_id_combo_box.Name = "up_cus_id_combo_box";
            this.up_cus_id_combo_box.Size = new System.Drawing.Size(134, 21);
            this.up_cus_id_combo_box.TabIndex = 155;
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
            this.label.Location = new System.Drawing.Point(7, 36);
            this.label.Name = "label";
            this.label.Size = new System.Drawing.Size(29, 21);
            this.label.TabIndex = 152;
            this.label.Text = "ID";
            this.label.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.SystemColors.Desktop;
            this.panel1.Controls.Add(this.label3);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Location = new System.Drawing.Point(171, 0);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(640, 54);
            this.panel1.TabIndex = 153;
            // 
            // dataGridView_Invoice
            // 
            this.dataGridView_Invoice.AllowUserToAddRows = false;
            this.dataGridView_Invoice.AllowUserToDeleteRows = false;
            this.dataGridView_Invoice.AutoGenerateColumns = false;
            this.dataGridView_Invoice.BackgroundColor = System.Drawing.SystemColors.Desktop;
            this.dataGridView_Invoice.BorderStyle = System.Windows.Forms.BorderStyle.None;
            dataGridViewCellStyle5.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle5.BackColor = System.Drawing.SystemColors.MenuHighlight;
            dataGridViewCellStyle5.Font = new System.Drawing.Font("Sitka Display", 10F);
            dataGridViewCellStyle5.ForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle5.Padding = new System.Windows.Forms.Padding(0, 1, 0, 1);
            dataGridViewCellStyle5.SelectionBackColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle5.SelectionForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle5.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dataGridView_Invoice.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle5;
            this.dataGridView_Invoice.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView_Invoice.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.solIDDataGridViewTextBoxColumn,
            this.solDateDataGridViewTextBoxColumn,
            this.solTimeDataGridViewTextBoxColumn,
            this.solAmountDataGridViewTextBoxColumn,
            this.proIDDataGridViewTextBoxColumn,
            this.cusIDDataGridViewTextBoxColumn});
            this.dataGridView_Invoice.DataSource = this.sOLDBindingSource;
            dataGridViewCellStyle6.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle6.BackColor = System.Drawing.Color.White;
            dataGridViewCellStyle6.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle6.ForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle6.SelectionBackColor = System.Drawing.SystemColors.Highlight;
            dataGridViewCellStyle6.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle6.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dataGridView_Invoice.DefaultCellStyle = dataGridViewCellStyle6;
            this.dataGridView_Invoice.EnableHeadersVisualStyles = false;
            this.dataGridView_Invoice.GridColor = System.Drawing.SystemColors.ActiveCaption;
            this.dataGridView_Invoice.Location = new System.Drawing.Point(169, 53);
            this.dataGridView_Invoice.Name = "dataGridView_Invoice";
            this.dataGridView_Invoice.ReadOnly = true;
            this.dataGridView_Invoice.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.Single;
            this.dataGridView_Invoice.Size = new System.Drawing.Size(642, 301);
            this.dataGridView_Invoice.TabIndex = 148;
            this.dataGridView_Invoice.CellMouseDoubleClick += new System.Windows.Forms.DataGridViewCellMouseEventHandler(this.dataGridView_Invoice_CellMouseDoubleClick);
            this.dataGridView_Invoice.RowEnter += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView_Invoice_RowEnter);
            // 
            // bMASDataSet1
            // 
            this.bMASDataSet1.DataSetName = "BMASDataSet1";
            this.bMASDataSet1.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // sOLDBindingSource
            // 
            this.sOLDBindingSource.DataMember = "SOLD";
            this.sOLDBindingSource.DataSource = this.bMASDataSet1;
            // 
            // sOLDTableAdapter
            // 
            this.sOLDTableAdapter.ClearBeforeFill = true;
            // 
            // solIDDataGridViewTextBoxColumn
            // 
            this.solIDDataGridViewTextBoxColumn.DataPropertyName = "Sol_ID";
            this.solIDDataGridViewTextBoxColumn.HeaderText = "Sol_ID";
            this.solIDDataGridViewTextBoxColumn.Name = "solIDDataGridViewTextBoxColumn";
            this.solIDDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // solDateDataGridViewTextBoxColumn
            // 
            this.solDateDataGridViewTextBoxColumn.DataPropertyName = "Sol_Date";
            this.solDateDataGridViewTextBoxColumn.HeaderText = "Sol_Date";
            this.solDateDataGridViewTextBoxColumn.Name = "solDateDataGridViewTextBoxColumn";
            this.solDateDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // solTimeDataGridViewTextBoxColumn
            // 
            this.solTimeDataGridViewTextBoxColumn.DataPropertyName = "Sol_Time";
            this.solTimeDataGridViewTextBoxColumn.HeaderText = "Sol_Time";
            this.solTimeDataGridViewTextBoxColumn.Name = "solTimeDataGridViewTextBoxColumn";
            this.solTimeDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // solAmountDataGridViewTextBoxColumn
            // 
            this.solAmountDataGridViewTextBoxColumn.DataPropertyName = "Sol_Amount";
            this.solAmountDataGridViewTextBoxColumn.HeaderText = "Sol_Amount";
            this.solAmountDataGridViewTextBoxColumn.Name = "solAmountDataGridViewTextBoxColumn";
            this.solAmountDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // proIDDataGridViewTextBoxColumn
            // 
            this.proIDDataGridViewTextBoxColumn.DataPropertyName = "Pro_ID";
            this.proIDDataGridViewTextBoxColumn.HeaderText = "Pro_ID";
            this.proIDDataGridViewTextBoxColumn.Name = "proIDDataGridViewTextBoxColumn";
            this.proIDDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // cusIDDataGridViewTextBoxColumn
            // 
            this.cusIDDataGridViewTextBoxColumn.DataPropertyName = "Cus_ID";
            this.cusIDDataGridViewTextBoxColumn.HeaderText = "Cus_ID";
            this.cusIDDataGridViewTextBoxColumn.Name = "cusIDDataGridViewTextBoxColumn";
            this.cusIDDataGridViewTextBoxColumn.ReadOnly = true;
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
            this.bunifuCustomLabel1.Location = new System.Drawing.Point(8, 250);
            this.bunifuCustomLabel1.Name = "bunifuCustomLabel1";
            this.bunifuCustomLabel1.Size = new System.Drawing.Size(110, 21);
            this.bunifuCustomLabel1.TabIndex = 161;
            this.bunifuCustomLabel1.Text = "Customer ID";
            this.bunifuCustomLabel1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // bunifuCustomLabel4
            // 
            this.bunifuCustomLabel4.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel4.AutoSize = true;
            this.bunifuCustomLabel4.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel4.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel4.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel4.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel4.Location = new System.Drawing.Point(8, 175);
            this.bunifuCustomLabel4.Name = "bunifuCustomLabel4";
            this.bunifuCustomLabel4.Size = new System.Drawing.Size(97, 21);
            this.bunifuCustomLabel4.TabIndex = 160;
            this.bunifuCustomLabel4.Text = "Product ID";
            this.bunifuCustomLabel4.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // View_Invoice
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.AutoScroll = true;
            this.ClientSize = new System.Drawing.Size(812, 355);
            this.Controls.Add(this.bunifuCustomLabel1);
            this.Controls.Add(this.bunifuCustomLabel4);
            this.Controls.Add(this.up_pro_id_combo_box);
            this.Controls.Add(this.bunifuCustomLabel3);
            this.Controls.Add(this.up_sol_amount);
            this.Controls.Add(this.up_inv);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.up_sol_id);
            this.Controls.Add(this.up_cus_id_combo_box);
            this.Controls.Add(this.label);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.dataGridView_Invoice);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "View_Invoice";
            this.ShowIcon = false;
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "View_Invoice";
            this.Load += new System.EventHandler(this.View_Invoice_Load);
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView_Invoice)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.sOLDBindingSource)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.ComboBox up_pro_id_combo_box;
        private ns1.BunifuCustomLabel bunifuCustomLabel3;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_sol_amount;
        private System.Windows.Forms.Button up_inv;
        private System.Windows.Forms.Label label1;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_sol_id;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.ComboBox up_cus_id_combo_box;
        private ns1.BunifuCustomLabel label;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.DataGridView dataGridView_Invoice;
        private BMASDataSet1 bMASDataSet1;
        private System.Windows.Forms.BindingSource sOLDBindingSource;
        private BMASDataSet1TableAdapters.SOLDTableAdapter sOLDTableAdapter;
        private System.Windows.Forms.DataGridViewTextBoxColumn solIDDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn solDateDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn solTimeDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn solAmountDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn proIDDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn cusIDDataGridViewTextBoxColumn;
        private ns1.BunifuCustomLabel bunifuCustomLabel1;
        private ns1.BunifuCustomLabel bunifuCustomLabel4;
    }
}