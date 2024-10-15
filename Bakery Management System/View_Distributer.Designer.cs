namespace Bakery_Management_System
{
    partial class View_Distributer
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
            this.label2 = new System.Windows.Forms.Label();
            this.panel1 = new System.Windows.Forms.Panel();
            this.up_dis = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.dataGridView_Distributer = new System.Windows.Forms.DataGridView();
            this.disIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.disNameDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.disDescriptionDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.disNTNDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.disRegistrationNoDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.manIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.dISTRIBUTERBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.bMASDataSet1 = new Bakery_Management_System.BMASDataSet1();
            this.dISTRIBUTERTableAdapter = new Bakery_Management_System.BMASDataSet1TableAdapters.DISTRIBUTERTableAdapter();
            this.up_man_id_combo_box = new System.Windows.Forms.ComboBox();
            this.bunifuCustomLabel6 = new ns1.BunifuCustomLabel();
            this.up_dis_description = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel7 = new ns1.BunifuCustomLabel();
            this.bunifuCustomLabel8 = new ns1.BunifuCustomLabel();
            this.up_dis_name = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel9 = new ns1.BunifuCustomLabel();
            this.up_dis_ntn = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel10 = new ns1.BunifuCustomLabel();
            this.up_dis_regno = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.up_dis_id = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.label = new ns1.BunifuCustomLabel();
            this.panel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView_Distributer)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dISTRIBUTERBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).BeginInit();
            this.SuspendLayout();
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label2.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label2.Location = new System.Drawing.Point(176, 18);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(240, 22);
            this.label2.TabIndex = 88;
            this.label2.Text = "Double Click on record, to delete";
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.SystemColors.Desktop;
            this.panel1.Controls.Add(this.label2);
            this.panel1.Location = new System.Drawing.Point(176, -3);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(620, 54);
            this.panel1.TabIndex = 93;
            // 
            // up_dis
            // 
            this.up_dis.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.up_dis.DialogResult = System.Windows.Forms.DialogResult.OK;
            this.up_dis.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.up_dis.Location = new System.Drawing.Point(12, 444);
            this.up_dis.Name = "up_dis";
            this.up_dis.Size = new System.Drawing.Size(133, 23);
            this.up_dis.TabIndex = 89;
            this.up_dis.Text = "Update";
            this.up_dis.UseVisualStyleBackColor = false;
            this.up_dis.Click += new System.EventHandler(this.up_dis_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label1.Location = new System.Drawing.Point(1, 13);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(64, 22);
            this.label1.TabIndex = 90;
            this.label1.Text = "Update";
            // 
            // dataGridView_Distributer
            // 
            this.dataGridView_Distributer.AllowUserToAddRows = false;
            this.dataGridView_Distributer.AllowUserToDeleteRows = false;
            this.dataGridView_Distributer.AutoGenerateColumns = false;
            this.dataGridView_Distributer.BackgroundColor = System.Drawing.SystemColors.Desktop;
            this.dataGridView_Distributer.BorderStyle = System.Windows.Forms.BorderStyle.None;
            dataGridViewCellStyle1.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle1.BackColor = System.Drawing.SystemColors.MenuHighlight;
            dataGridViewCellStyle1.Font = new System.Drawing.Font("Sitka Display", 10F);
            dataGridViewCellStyle1.ForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.Padding = new System.Windows.Forms.Padding(0, 1, 0, 1);
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle1.SelectionForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dataGridView_Distributer.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle1;
            this.dataGridView_Distributer.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView_Distributer.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.disIDDataGridViewTextBoxColumn,
            this.disNameDataGridViewTextBoxColumn,
            this.disDescriptionDataGridViewTextBoxColumn,
            this.disNTNDataGridViewTextBoxColumn,
            this.disRegistrationNoDataGridViewTextBoxColumn,
            this.manIDDataGridViewTextBoxColumn});
            this.dataGridView_Distributer.DataSource = this.dISTRIBUTERBindingSource;
            dataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.White;
            dataGridViewCellStyle2.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle2.ForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle2.SelectionBackColor = System.Drawing.SystemColors.Highlight;
            dataGridViewCellStyle2.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dataGridView_Distributer.DefaultCellStyle = dataGridViewCellStyle2;
            this.dataGridView_Distributer.EnableHeadersVisualStyles = false;
            this.dataGridView_Distributer.GridColor = System.Drawing.SystemColors.ActiveCaption;
            this.dataGridView_Distributer.Location = new System.Drawing.Point(173, 48);
            this.dataGridView_Distributer.Name = "dataGridView_Distributer";
            this.dataGridView_Distributer.ReadOnly = true;
            this.dataGridView_Distributer.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.Single;
            this.dataGridView_Distributer.Size = new System.Drawing.Size(623, 450);
            this.dataGridView_Distributer.TabIndex = 88;
            this.dataGridView_Distributer.CellDoubleClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView_Distributer_CellDoubleClick);
            this.dataGridView_Distributer.RowEnter += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView_Manufacturer_RowEnter);
            // 
            // disIDDataGridViewTextBoxColumn
            // 
            this.disIDDataGridViewTextBoxColumn.DataPropertyName = "Dis_ID";
            this.disIDDataGridViewTextBoxColumn.HeaderText = "Dis_ID";
            this.disIDDataGridViewTextBoxColumn.Name = "disIDDataGridViewTextBoxColumn";
            this.disIDDataGridViewTextBoxColumn.ReadOnly = true;
            this.disIDDataGridViewTextBoxColumn.Width = 70;
            // 
            // disNameDataGridViewTextBoxColumn
            // 
            this.disNameDataGridViewTextBoxColumn.DataPropertyName = "Dis_Name";
            this.disNameDataGridViewTextBoxColumn.HeaderText = "Dis_Name";
            this.disNameDataGridViewTextBoxColumn.Name = "disNameDataGridViewTextBoxColumn";
            this.disNameDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // disDescriptionDataGridViewTextBoxColumn
            // 
            this.disDescriptionDataGridViewTextBoxColumn.DataPropertyName = "Dis_Description";
            this.disDescriptionDataGridViewTextBoxColumn.HeaderText = "Dis_Description";
            this.disDescriptionDataGridViewTextBoxColumn.Name = "disDescriptionDataGridViewTextBoxColumn";
            this.disDescriptionDataGridViewTextBoxColumn.ReadOnly = true;
            this.disDescriptionDataGridViewTextBoxColumn.Width = 110;
            // 
            // disNTNDataGridViewTextBoxColumn
            // 
            this.disNTNDataGridViewTextBoxColumn.DataPropertyName = "Dis_NTN";
            this.disNTNDataGridViewTextBoxColumn.HeaderText = "Dis_NTN";
            this.disNTNDataGridViewTextBoxColumn.Name = "disNTNDataGridViewTextBoxColumn";
            this.disNTNDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // disRegistrationNoDataGridViewTextBoxColumn
            // 
            this.disRegistrationNoDataGridViewTextBoxColumn.DataPropertyName = "Dis_RegistrationNo";
            this.disRegistrationNoDataGridViewTextBoxColumn.HeaderText = "Dis_RegistrationNo";
            this.disRegistrationNoDataGridViewTextBoxColumn.Name = "disRegistrationNoDataGridViewTextBoxColumn";
            this.disRegistrationNoDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // manIDDataGridViewTextBoxColumn
            // 
            this.manIDDataGridViewTextBoxColumn.DataPropertyName = "Man_ID";
            this.manIDDataGridViewTextBoxColumn.HeaderText = "Man_ID";
            this.manIDDataGridViewTextBoxColumn.Name = "manIDDataGridViewTextBoxColumn";
            this.manIDDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // dISTRIBUTERBindingSource
            // 
            this.dISTRIBUTERBindingSource.DataMember = "DISTRIBUTER";
            this.dISTRIBUTERBindingSource.DataSource = this.bMASDataSet1;
            // 
            // bMASDataSet1
            // 
            this.bMASDataSet1.DataSetName = "BMASDataSet1";
            this.bMASDataSet1.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // dISTRIBUTERTableAdapter
            // 
            this.dISTRIBUTERTableAdapter.ClearBeforeFill = true;
            // 
            // up_man_id_combo_box
            // 
            this.up_man_id_combo_box.BackColor = System.Drawing.SystemColors.Control;
            this.up_man_id_combo_box.FormattingEnabled = true;
            this.up_man_id_combo_box.Location = new System.Drawing.Point(2, 405);
            this.up_man_id_combo_box.Name = "up_man_id_combo_box";
            this.up_man_id_combo_box.Size = new System.Drawing.Size(165, 21);
            this.up_man_id_combo_box.TabIndex = 113;
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
            this.bunifuCustomLabel6.Location = new System.Drawing.Point(2, 376);
            this.bunifuCustomLabel6.Name = "bunifuCustomLabel6";
            this.bunifuCustomLabel6.Size = new System.Drawing.Size(146, 21);
            this.bunifuCustomLabel6.TabIndex = 111;
            this.bunifuCustomLabel6.Text = "Manufacturer ID";
            this.bunifuCustomLabel6.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_dis_description
            // 
            this.up_dis_description.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_dis_description.BackColor = System.Drawing.SystemColors.Control;
            this.up_dis_description.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_dis_description.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_dis_description.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_dis_description.Location = new System.Drawing.Point(2, 341);
            this.up_dis_description.Name = "up_dis_description";
            this.up_dis_description.Size = new System.Drawing.Size(163, 23);
            this.up_dis_description.TabIndex = 110;
            // 
            // bunifuCustomLabel7
            // 
            this.bunifuCustomLabel7.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel7.AutoSize = true;
            this.bunifuCustomLabel7.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel7.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel7.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel7.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel7.Location = new System.Drawing.Point(2, 313);
            this.bunifuCustomLabel7.Name = "bunifuCustomLabel7";
            this.bunifuCustomLabel7.Size = new System.Drawing.Size(106, 21);
            this.bunifuCustomLabel7.TabIndex = 112;
            this.bunifuCustomLabel7.Text = "Description";
            this.bunifuCustomLabel7.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
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
            this.bunifuCustomLabel8.Location = new System.Drawing.Point(2, 128);
            this.bunifuCustomLabel8.Name = "bunifuCustomLabel8";
            this.bunifuCustomLabel8.Size = new System.Drawing.Size(58, 21);
            this.bunifuCustomLabel8.TabIndex = 109;
            this.bunifuCustomLabel8.Text = "Name";
            this.bunifuCustomLabel8.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_dis_name
            // 
            this.up_dis_name.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_dis_name.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_dis_name.BackColor = System.Drawing.SystemColors.Control;
            this.up_dis_name.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_dis_name.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_dis_name.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_dis_name.Location = new System.Drawing.Point(1, 155);
            this.up_dis_name.Name = "up_dis_name";
            this.up_dis_name.Size = new System.Drawing.Size(163, 23);
            this.up_dis_name.TabIndex = 104;
            // 
            // bunifuCustomLabel9
            // 
            this.bunifuCustomLabel9.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel9.AutoSize = true;
            this.bunifuCustomLabel9.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel9.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel9.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel9.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel9.Location = new System.Drawing.Point(2, 192);
            this.bunifuCustomLabel9.Name = "bunifuCustomLabel9";
            this.bunifuCustomLabel9.Size = new System.Drawing.Size(47, 21);
            this.bunifuCustomLabel9.TabIndex = 107;
            this.bunifuCustomLabel9.Text = "NTN";
            this.bunifuCustomLabel9.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_dis_ntn
            // 
            this.up_dis_ntn.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_dis_ntn.BackColor = System.Drawing.SystemColors.Control;
            this.up_dis_ntn.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_dis_ntn.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_dis_ntn.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_dis_ntn.Location = new System.Drawing.Point(2, 221);
            this.up_dis_ntn.Name = "up_dis_ntn";
            this.up_dis_ntn.Size = new System.Drawing.Size(163, 23);
            this.up_dis_ntn.TabIndex = 105;
            // 
            // bunifuCustomLabel10
            // 
            this.bunifuCustomLabel10.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel10.AutoSize = true;
            this.bunifuCustomLabel10.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel10.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel10.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel10.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel10.Location = new System.Drawing.Point(1, 252);
            this.bunifuCustomLabel10.Name = "bunifuCustomLabel10";
            this.bunifuCustomLabel10.Size = new System.Drawing.Size(140, 21);
            this.bunifuCustomLabel10.TabIndex = 108;
            this.bunifuCustomLabel10.Text = "Registration No";
            this.bunifuCustomLabel10.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_dis_regno
            // 
            this.up_dis_regno.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_dis_regno.BackColor = System.Drawing.SystemColors.Control;
            this.up_dis_regno.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_dis_regno.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_dis_regno.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_dis_regno.Location = new System.Drawing.Point(2, 281);
            this.up_dis_regno.Name = "up_dis_regno";
            this.up_dis_regno.Size = new System.Drawing.Size(163, 23);
            this.up_dis_regno.TabIndex = 106;
            // 
            // up_dis_id
            // 
            this.up_dis_id.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_dis_id.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_dis_id.BackColor = System.Drawing.SystemColors.ControlLight;
            this.up_dis_id.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_dis_id.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_dis_id.Enabled = false;
            this.up_dis_id.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_dis_id.Location = new System.Drawing.Point(1, 89);
            this.up_dis_id.Name = "up_dis_id";
            this.up_dis_id.ReadOnly = true;
            this.up_dis_id.Size = new System.Drawing.Size(132, 23);
            this.up_dis_id.TabIndex = 91;
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
            this.label.Location = new System.Drawing.Point(1, 60);
            this.label.Name = "label";
            this.label.Size = new System.Drawing.Size(29, 21);
            this.label.TabIndex = 92;
            this.label.Text = "ID";
            this.label.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // View_Distributer
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.AutoScroll = true;
            this.ClientSize = new System.Drawing.Size(798, 505);
            this.Controls.Add(this.up_man_id_combo_box);
            this.Controls.Add(this.bunifuCustomLabel6);
            this.Controls.Add(this.up_dis_description);
            this.Controls.Add(this.bunifuCustomLabel7);
            this.Controls.Add(this.bunifuCustomLabel8);
            this.Controls.Add(this.up_dis_name);
            this.Controls.Add(this.bunifuCustomLabel9);
            this.Controls.Add(this.up_dis_ntn);
            this.Controls.Add(this.bunifuCustomLabel10);
            this.Controls.Add(this.up_dis_regno);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.up_dis);
            this.Controls.Add(this.label);
            this.Controls.Add(this.up_dis_id);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.dataGridView_Distributer);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "View_Distributer";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "View_Distributer";
            this.Load += new System.EventHandler(this.View_Distributer_Load);
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView_Distributer)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dISTRIBUTERBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Button up_dis;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.DataGridView dataGridView_Distributer;
        private BMASDataSet1 bMASDataSet1;
        private System.Windows.Forms.BindingSource dISTRIBUTERBindingSource;
        private BMASDataSet1TableAdapters.DISTRIBUTERTableAdapter dISTRIBUTERTableAdapter;
        private System.Windows.Forms.DataGridViewTextBoxColumn disIDDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn disNameDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn disDescriptionDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn disNTNDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn disRegistrationNoDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn manIDDataGridViewTextBoxColumn;
        private System.Windows.Forms.ComboBox up_man_id_combo_box;
        private ns1.BunifuCustomLabel bunifuCustomLabel6;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_dis_description;
        private ns1.BunifuCustomLabel bunifuCustomLabel7;
        private ns1.BunifuCustomLabel bunifuCustomLabel8;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_dis_name;
        private ns1.BunifuCustomLabel bunifuCustomLabel9;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_dis_ntn;
        private ns1.BunifuCustomLabel bunifuCustomLabel10;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_dis_regno;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_dis_id;
        private ns1.BunifuCustomLabel label;
    }
}