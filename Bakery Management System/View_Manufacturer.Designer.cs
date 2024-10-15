namespace Bakery_Management_System
{
    partial class View_Manufacturer
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
            this.mANUFACTURERBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.bMASDataSet1 = new Bakery_Management_System.BMASDataSet1();
            this.mANUFACTURERTableAdapter = new Bakery_Management_System.BMASDataSet1TableAdapters.MANUFACTURERTableAdapter();
            this.dataGridView_Manufacturer = new System.Windows.Forms.DataGridView();
            this.manIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.manNameDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.manDescriptionDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.manLocationDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.manTypeDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.manLicenseDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.add_cus = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.panel1 = new System.Windows.Forms.Panel();
            this.label2 = new System.Windows.Forms.Label();
            this.up_man_id = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.label = new ns1.BunifuCustomLabel();
            this.bunifuCustomLabel4 = new ns1.BunifuCustomLabel();
            this.up_man_licesnse = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel5 = new ns1.BunifuCustomLabel();
            this.up_man_descrption = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel3 = new ns1.BunifuCustomLabel();
            this.up_man_name = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel1 = new ns1.BunifuCustomLabel();
            this.up_man_location = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel2 = new ns1.BunifuCustomLabel();
            this.up_man_type = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            ((System.ComponentModel.ISupportInitialize)(this.mANUFACTURERBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView_Manufacturer)).BeginInit();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // mANUFACTURERBindingSource
            // 
            this.mANUFACTURERBindingSource.DataMember = "MANUFACTURER";
            this.mANUFACTURERBindingSource.DataSource = this.bMASDataSet1;
            // 
            // bMASDataSet1
            // 
            this.bMASDataSet1.DataSetName = "BMASDataSet1";
            this.bMASDataSet1.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // mANUFACTURERTableAdapter
            // 
            this.mANUFACTURERTableAdapter.ClearBeforeFill = true;
            // 
            // dataGridView_Manufacturer
            // 
            this.dataGridView_Manufacturer.AllowUserToAddRows = false;
            this.dataGridView_Manufacturer.AllowUserToDeleteRows = false;
            this.dataGridView_Manufacturer.AutoGenerateColumns = false;
            this.dataGridView_Manufacturer.BackgroundColor = System.Drawing.SystemColors.Desktop;
            this.dataGridView_Manufacturer.BorderStyle = System.Windows.Forms.BorderStyle.None;
            dataGridViewCellStyle1.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle1.BackColor = System.Drawing.SystemColors.MenuHighlight;
            dataGridViewCellStyle1.Font = new System.Drawing.Font("Sitka Display", 10F);
            dataGridViewCellStyle1.ForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.Padding = new System.Windows.Forms.Padding(0, 1, 0, 1);
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle1.SelectionForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dataGridView_Manufacturer.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle1;
            this.dataGridView_Manufacturer.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView_Manufacturer.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.manIDDataGridViewTextBoxColumn,
            this.manNameDataGridViewTextBoxColumn,
            this.manDescriptionDataGridViewTextBoxColumn,
            this.manLocationDataGridViewTextBoxColumn,
            this.manTypeDataGridViewTextBoxColumn,
            this.manLicenseDataGridViewTextBoxColumn});
            this.dataGridView_Manufacturer.DataSource = this.mANUFACTURERBindingSource;
            dataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.White;
            dataGridViewCellStyle2.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle2.ForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle2.SelectionBackColor = System.Drawing.SystemColors.Highlight;
            dataGridViewCellStyle2.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dataGridView_Manufacturer.DefaultCellStyle = dataGridViewCellStyle2;
            this.dataGridView_Manufacturer.EnableHeadersVisualStyles = false;
            this.dataGridView_Manufacturer.GridColor = System.Drawing.SystemColors.ActiveCaption;
            this.dataGridView_Manufacturer.Location = new System.Drawing.Point(187, 42);
            this.dataGridView_Manufacturer.Name = "dataGridView_Manufacturer";
            this.dataGridView_Manufacturer.ReadOnly = true;
            this.dataGridView_Manufacturer.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.Single;
            this.dataGridView_Manufacturer.Size = new System.Drawing.Size(642, 450);
            this.dataGridView_Manufacturer.TabIndex = 65;
            this.dataGridView_Manufacturer.CellDoubleClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView_Manufacturer_CellDoubleClick);
            this.dataGridView_Manufacturer.RowEnter += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView_Manufacturer_RowEnter);
            // 
            // manIDDataGridViewTextBoxColumn
            // 
            this.manIDDataGridViewTextBoxColumn.DataPropertyName = "Man_ID";
            this.manIDDataGridViewTextBoxColumn.HeaderText = "Man_ID";
            this.manIDDataGridViewTextBoxColumn.Name = "manIDDataGridViewTextBoxColumn";
            this.manIDDataGridViewTextBoxColumn.ReadOnly = true;
            this.manIDDataGridViewTextBoxColumn.Width = 70;
            // 
            // manNameDataGridViewTextBoxColumn
            // 
            this.manNameDataGridViewTextBoxColumn.DataPropertyName = "Man_Name";
            this.manNameDataGridViewTextBoxColumn.HeaderText = "Man_Name";
            this.manNameDataGridViewTextBoxColumn.Name = "manNameDataGridViewTextBoxColumn";
            this.manNameDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // manDescriptionDataGridViewTextBoxColumn
            // 
            this.manDescriptionDataGridViewTextBoxColumn.DataPropertyName = "Man_Description";
            this.manDescriptionDataGridViewTextBoxColumn.HeaderText = "Man_Description";
            this.manDescriptionDataGridViewTextBoxColumn.Name = "manDescriptionDataGridViewTextBoxColumn";
            this.manDescriptionDataGridViewTextBoxColumn.ReadOnly = true;
            this.manDescriptionDataGridViewTextBoxColumn.Width = 130;
            // 
            // manLocationDataGridViewTextBoxColumn
            // 
            this.manLocationDataGridViewTextBoxColumn.DataPropertyName = "Man_Location";
            this.manLocationDataGridViewTextBoxColumn.HeaderText = "Man_Location";
            this.manLocationDataGridViewTextBoxColumn.Name = "manLocationDataGridViewTextBoxColumn";
            this.manLocationDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // manTypeDataGridViewTextBoxColumn
            // 
            this.manTypeDataGridViewTextBoxColumn.DataPropertyName = "Man_Type";
            this.manTypeDataGridViewTextBoxColumn.HeaderText = "Man_Type";
            this.manTypeDataGridViewTextBoxColumn.Name = "manTypeDataGridViewTextBoxColumn";
            this.manTypeDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // manLicenseDataGridViewTextBoxColumn
            // 
            this.manLicenseDataGridViewTextBoxColumn.DataPropertyName = "Man_License";
            this.manLicenseDataGridViewTextBoxColumn.HeaderText = "Man_License";
            this.manLicenseDataGridViewTextBoxColumn.Name = "manLicenseDataGridViewTextBoxColumn";
            this.manLicenseDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // add_cus
            // 
            this.add_cus.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.add_cus.DialogResult = System.Windows.Forms.DialogResult.OK;
            this.add_cus.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.add_cus.Location = new System.Drawing.Point(13, 460);
            this.add_cus.Name = "add_cus";
            this.add_cus.Size = new System.Drawing.Size(133, 23);
            this.add_cus.TabIndex = 68;
            this.add_cus.Text = "Update";
            this.add_cus.UseVisualStyleBackColor = false;
            this.add_cus.Click += new System.EventHandler(this.add_cus_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label1.Location = new System.Drawing.Point(12, 9);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(64, 22);
            this.label1.TabIndex = 72;
            this.label1.Text = "Update";
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.SystemColors.Desktop;
            this.panel1.Controls.Add(this.label2);
            this.panel1.Location = new System.Drawing.Point(187, -2);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(642, 45);
            this.panel1.TabIndex = 76;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label2.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label2.Location = new System.Drawing.Point(176, 13);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(240, 22);
            this.label2.TabIndex = 88;
            this.label2.Text = "Double Click on record, to delete";
            // 
            // up_man_id
            // 
            this.up_man_id.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_man_id.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_man_id.BackColor = System.Drawing.SystemColors.ControlLight;
            this.up_man_id.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_man_id.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_man_id.Enabled = false;
            this.up_man_id.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_man_id.Location = new System.Drawing.Point(12, 85);
            this.up_man_id.Name = "up_man_id";
            this.up_man_id.ReadOnly = true;
            this.up_man_id.Size = new System.Drawing.Size(134, 23);
            this.up_man_id.TabIndex = 73;
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
            this.label.Location = new System.Drawing.Point(12, 56);
            this.label.Name = "label";
            this.label.Size = new System.Drawing.Size(29, 21);
            this.label.TabIndex = 74;
            this.label.Text = "ID";
            this.label.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
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
            this.bunifuCustomLabel4.Location = new System.Drawing.Point(12, 397);
            this.bunifuCustomLabel4.Name = "bunifuCustomLabel4";
            this.bunifuCustomLabel4.Size = new System.Drawing.Size(106, 21);
            this.bunifuCustomLabel4.TabIndex = 86;
            this.bunifuCustomLabel4.Text = "Description";
            this.bunifuCustomLabel4.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_man_licesnse
            // 
            this.up_man_licesnse.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_man_licesnse.BackColor = System.Drawing.SystemColors.Control;
            this.up_man_licesnse.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_man_licesnse.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_man_licesnse.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_man_licesnse.Location = new System.Drawing.Point(12, 360);
            this.up_man_licesnse.Name = "up_man_licesnse";
            this.up_man_licesnse.Size = new System.Drawing.Size(134, 23);
            this.up_man_licesnse.TabIndex = 84;
            // 
            // bunifuCustomLabel5
            // 
            this.bunifuCustomLabel5.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel5.AutoSize = true;
            this.bunifuCustomLabel5.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel5.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel5.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel5.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel5.Location = new System.Drawing.Point(12, 325);
            this.bunifuCustomLabel5.Name = "bunifuCustomLabel5";
            this.bunifuCustomLabel5.Size = new System.Drawing.Size(72, 21);
            this.bunifuCustomLabel5.TabIndex = 87;
            this.bunifuCustomLabel5.Text = "License";
            this.bunifuCustomLabel5.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_man_descrption
            // 
            this.up_man_descrption.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_man_descrption.BackColor = System.Drawing.SystemColors.Control;
            this.up_man_descrption.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_man_descrption.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_man_descrption.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_man_descrption.Location = new System.Drawing.Point(12, 429);
            this.up_man_descrption.Name = "up_man_descrption";
            this.up_man_descrption.Size = new System.Drawing.Size(134, 23);
            this.up_man_descrption.TabIndex = 85;
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
            this.bunifuCustomLabel3.Location = new System.Drawing.Point(12, 122);
            this.bunifuCustomLabel3.Name = "bunifuCustomLabel3";
            this.bunifuCustomLabel3.Size = new System.Drawing.Size(58, 21);
            this.bunifuCustomLabel3.TabIndex = 82;
            this.bunifuCustomLabel3.Text = "Name";
            this.bunifuCustomLabel3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_man_name
            // 
            this.up_man_name.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_man_name.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_man_name.BackColor = System.Drawing.SystemColors.Control;
            this.up_man_name.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_man_name.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_man_name.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_man_name.Location = new System.Drawing.Point(12, 150);
            this.up_man_name.Name = "up_man_name";
            this.up_man_name.Size = new System.Drawing.Size(134, 23);
            this.up_man_name.TabIndex = 77;
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
            this.bunifuCustomLabel1.Location = new System.Drawing.Point(12, 187);
            this.bunifuCustomLabel1.Name = "bunifuCustomLabel1";
            this.bunifuCustomLabel1.Size = new System.Drawing.Size(82, 21);
            this.bunifuCustomLabel1.TabIndex = 80;
            this.bunifuCustomLabel1.Text = "Location";
            this.bunifuCustomLabel1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_man_location
            // 
            this.up_man_location.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_man_location.BackColor = System.Drawing.SystemColors.Control;
            this.up_man_location.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_man_location.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_man_location.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_man_location.Location = new System.Drawing.Point(12, 218);
            this.up_man_location.Name = "up_man_location";
            this.up_man_location.Size = new System.Drawing.Size(134, 23);
            this.up_man_location.TabIndex = 78;
            // 
            // bunifuCustomLabel2
            // 
            this.bunifuCustomLabel2.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel2.AutoSize = true;
            this.bunifuCustomLabel2.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel2.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel2.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel2.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel2.Location = new System.Drawing.Point(12, 255);
            this.bunifuCustomLabel2.Name = "bunifuCustomLabel2";
            this.bunifuCustomLabel2.Size = new System.Drawing.Size(50, 21);
            this.bunifuCustomLabel2.TabIndex = 81;
            this.bunifuCustomLabel2.Text = "Type";
            this.bunifuCustomLabel2.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_man_type
            // 
            this.up_man_type.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_man_type.BackColor = System.Drawing.SystemColors.Control;
            this.up_man_type.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_man_type.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_man_type.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_man_type.Location = new System.Drawing.Point(12, 288);
            this.up_man_type.Name = "up_man_type";
            this.up_man_type.Size = new System.Drawing.Size(134, 23);
            this.up_man_type.TabIndex = 79;
            // 
            // View_Manufacturer
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.AutoScroll = true;
            this.ClientSize = new System.Drawing.Size(830, 493);
            this.Controls.Add(this.bunifuCustomLabel4);
            this.Controls.Add(this.up_man_licesnse);
            this.Controls.Add(this.bunifuCustomLabel5);
            this.Controls.Add(this.up_man_descrption);
            this.Controls.Add(this.bunifuCustomLabel3);
            this.Controls.Add(this.up_man_name);
            this.Controls.Add(this.bunifuCustomLabel1);
            this.Controls.Add(this.up_man_location);
            this.Controls.Add(this.bunifuCustomLabel2);
            this.Controls.Add(this.up_man_type);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.label);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.up_man_id);
            this.Controls.Add(this.add_cus);
            this.Controls.Add(this.dataGridView_Manufacturer);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "View_Manufacturer";
            this.ShowInTaskbar = false;
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "View_Manufacturer";
            this.Load += new System.EventHandler(this.View_Manufacturer_Load);
            ((System.ComponentModel.ISupportInitialize)(this.mANUFACTURERBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView_Manufacturer)).EndInit();
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.BindingSource mANUFACTURERBindingSource;
        private BMASDataSet1TableAdapters.MANUFACTURERTableAdapter mANUFACTURERTableAdapter;
        private BMASDataSet1 bMASDataSet1;
        private System.Windows.Forms.DataGridView dataGridView_Manufacturer;
        private System.Windows.Forms.Button add_cus;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Panel panel1;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_man_id;
        private ns1.BunifuCustomLabel label;
        private ns1.BunifuCustomLabel bunifuCustomLabel4;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_man_licesnse;
        private ns1.BunifuCustomLabel bunifuCustomLabel5;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_man_descrption;
        private ns1.BunifuCustomLabel bunifuCustomLabel3;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_man_name;
        private ns1.BunifuCustomLabel bunifuCustomLabel1;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_man_location;
        private ns1.BunifuCustomLabel bunifuCustomLabel2;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_man_type;
        private System.Windows.Forms.DataGridViewTextBoxColumn manIDDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn manNameDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn manDescriptionDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn manLocationDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn manTypeDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn manLicenseDataGridViewTextBoxColumn;
        private System.Windows.Forms.Label label2;
    }
}