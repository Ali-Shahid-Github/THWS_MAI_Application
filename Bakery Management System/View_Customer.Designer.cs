namespace Bakery_Management_System
{
    partial class View_Customer
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
            this.dataGridView1 = new System.Windows.Forms.DataGridView();
            this.cusIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.cusNameDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.cusLocationDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.cusContactNoDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.cUSTOMERBindingSource1 = new System.Windows.Forms.BindingSource(this.components);
            this.bMASDataSet1 = new Bakery_Management_System.BMASDataSet1();
            this.label1 = new System.Windows.Forms.Label();
            this.bunifuCustomLabel3 = new ns1.BunifuCustomLabel();
            this.up_cus_name = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel1 = new ns1.BunifuCustomLabel();
            this.up_cus_location = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel2 = new ns1.BunifuCustomLabel();
            this.up_cus_contact = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.add_cus = new System.Windows.Forms.Button();
            this.label = new ns1.BunifuCustomLabel();
            this.up_cus_id = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.cUSTOMERBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.cUSTOMERTableAdapter = new Bakery_Management_System.BMASDataSet1TableAdapters.CUSTOMERTableAdapter();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.cUSTOMERBindingSource1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.cUSTOMERBindingSource)).BeginInit();
            this.SuspendLayout();
            // 
            // dataGridView1
            // 
            this.dataGridView1.AllowUserToAddRows = false;
            this.dataGridView1.AllowUserToDeleteRows = false;
            this.dataGridView1.AutoGenerateColumns = false;
            this.dataGridView1.BackgroundColor = System.Drawing.SystemColors.Desktop;
            this.dataGridView1.BorderStyle = System.Windows.Forms.BorderStyle.None;
            dataGridViewCellStyle1.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle1.BackColor = System.Drawing.SystemColors.MenuHighlight;
            dataGridViewCellStyle1.Font = new System.Drawing.Font("Sitka Display", 10F);
            dataGridViewCellStyle1.ForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.Padding = new System.Windows.Forms.Padding(0, 1, 0, 1);
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle1.SelectionForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dataGridView1.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle1;
            this.dataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView1.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.cusIDDataGridViewTextBoxColumn,
            this.cusNameDataGridViewTextBoxColumn,
            this.cusLocationDataGridViewTextBoxColumn,
            this.cusContactNoDataGridViewTextBoxColumn});
            this.dataGridView1.DataSource = this.cUSTOMERBindingSource1;
            dataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.White;
            dataGridViewCellStyle2.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle2.ForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle2.SelectionBackColor = System.Drawing.SystemColors.Highlight;
            dataGridViewCellStyle2.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dataGridView1.DefaultCellStyle = dataGridViewCellStyle2;
            this.dataGridView1.EnableHeadersVisualStyles = false;
            this.dataGridView1.GridColor = System.Drawing.SystemColors.ActiveCaption;
            this.dataGridView1.Location = new System.Drawing.Point(126, 0);
            this.dataGridView1.Name = "dataGridView1";
            this.dataGridView1.ReadOnly = true;
            this.dataGridView1.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.Single;
            this.dataGridView1.Size = new System.Drawing.Size(607, 408);
            this.dataGridView1.TabIndex = 0;
            this.dataGridView1.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView1_CellContentClick);
            this.dataGridView1.RowEnter += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView1_RowEnter);
            // 
            // cusIDDataGridViewTextBoxColumn
            // 
            this.cusIDDataGridViewTextBoxColumn.DataPropertyName = "Cus_ID";
            this.cusIDDataGridViewTextBoxColumn.HeaderText = "Customer ID";
            this.cusIDDataGridViewTextBoxColumn.Name = "cusIDDataGridViewTextBoxColumn";
            this.cusIDDataGridViewTextBoxColumn.ReadOnly = true;
            this.cusIDDataGridViewTextBoxColumn.Width = 110;
            // 
            // cusNameDataGridViewTextBoxColumn
            // 
            this.cusNameDataGridViewTextBoxColumn.DataPropertyName = "Cus_Name";
            this.cusNameDataGridViewTextBoxColumn.HeaderText = "Custome Name";
            this.cusNameDataGridViewTextBoxColumn.Name = "cusNameDataGridViewTextBoxColumn";
            this.cusNameDataGridViewTextBoxColumn.ReadOnly = true;
            this.cusNameDataGridViewTextBoxColumn.Width = 130;
            // 
            // cusLocationDataGridViewTextBoxColumn
            // 
            this.cusLocationDataGridViewTextBoxColumn.DataPropertyName = "Cus_Location";
            this.cusLocationDataGridViewTextBoxColumn.HeaderText = "Customer Location";
            this.cusLocationDataGridViewTextBoxColumn.Name = "cusLocationDataGridViewTextBoxColumn";
            this.cusLocationDataGridViewTextBoxColumn.ReadOnly = true;
            this.cusLocationDataGridViewTextBoxColumn.Width = 150;
            // 
            // cusContactNoDataGridViewTextBoxColumn
            // 
            this.cusContactNoDataGridViewTextBoxColumn.DataPropertyName = "Cus_ContactNo";
            this.cusContactNoDataGridViewTextBoxColumn.HeaderText = "Customer Contact No";
            this.cusContactNoDataGridViewTextBoxColumn.Name = "cusContactNoDataGridViewTextBoxColumn";
            this.cusContactNoDataGridViewTextBoxColumn.ReadOnly = true;
            this.cusContactNoDataGridViewTextBoxColumn.Width = 180;
            // 
            // cUSTOMERBindingSource1
            // 
            this.cUSTOMERBindingSource1.DataMember = "CUSTOMER";
            this.cUSTOMERBindingSource1.DataSource = this.bMASDataSet1;
            // 
            // bMASDataSet1
            // 
            this.bMASDataSet1.DataSetName = "BMASDataSet1";
            this.bMASDataSet1.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label1.Location = new System.Drawing.Point(1, 0);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(64, 22);
            this.label1.TabIndex = 50;
            this.label1.Text = "Update";
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
            this.bunifuCustomLabel3.Location = new System.Drawing.Point(1, 113);
            this.bunifuCustomLabel3.Name = "bunifuCustomLabel3";
            this.bunifuCustomLabel3.Size = new System.Drawing.Size(58, 21);
            this.bunifuCustomLabel3.TabIndex = 49;
            this.bunifuCustomLabel3.Text = "Name";
            this.bunifuCustomLabel3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_cus_name
            // 
            this.up_cus_name.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_cus_name.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_cus_name.BackColor = System.Drawing.SystemColors.Control;
            this.up_cus_name.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_cus_name.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_cus_name.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_cus_name.Location = new System.Drawing.Point(1, 142);
            this.up_cus_name.Name = "up_cus_name";
            this.up_cus_name.Size = new System.Drawing.Size(119, 23);
            this.up_cus_name.TabIndex = 43;
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
            this.bunifuCustomLabel1.Location = new System.Drawing.Point(1, 178);
            this.bunifuCustomLabel1.Name = "bunifuCustomLabel1";
            this.bunifuCustomLabel1.Size = new System.Drawing.Size(82, 21);
            this.bunifuCustomLabel1.TabIndex = 47;
            this.bunifuCustomLabel1.Text = "Location";
            this.bunifuCustomLabel1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_cus_location
            // 
            this.up_cus_location.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_cus_location.BackColor = System.Drawing.SystemColors.Control;
            this.up_cus_location.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_cus_location.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_cus_location.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_cus_location.Location = new System.Drawing.Point(1, 215);
            this.up_cus_location.Name = "up_cus_location";
            this.up_cus_location.Size = new System.Drawing.Size(119, 23);
            this.up_cus_location.TabIndex = 44;
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
            this.bunifuCustomLabel2.Location = new System.Drawing.Point(1, 251);
            this.bunifuCustomLabel2.Name = "bunifuCustomLabel2";
            this.bunifuCustomLabel2.Size = new System.Drawing.Size(73, 21);
            this.bunifuCustomLabel2.TabIndex = 48;
            this.bunifuCustomLabel2.Text = "Contact";
            this.bunifuCustomLabel2.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_cus_contact
            // 
            this.up_cus_contact.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_cus_contact.BackColor = System.Drawing.SystemColors.Control;
            this.up_cus_contact.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_cus_contact.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_cus_contact.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_cus_contact.Location = new System.Drawing.Point(1, 288);
            this.up_cus_contact.Name = "up_cus_contact";
            this.up_cus_contact.Size = new System.Drawing.Size(119, 23);
            this.up_cus_contact.TabIndex = 45;
            // 
            // add_cus
            // 
            this.add_cus.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.add_cus.DialogResult = System.Windows.Forms.DialogResult.OK;
            this.add_cus.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.add_cus.Location = new System.Drawing.Point(1, 330);
            this.add_cus.Name = "add_cus";
            this.add_cus.Size = new System.Drawing.Size(119, 23);
            this.add_cus.TabIndex = 46;
            this.add_cus.Text = "Update";
            this.add_cus.UseVisualStyleBackColor = false;
            this.add_cus.Click += new System.EventHandler(this.add_cus_Click);
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
            this.label.Location = new System.Drawing.Point(1, 47);
            this.label.Name = "label";
            this.label.Size = new System.Drawing.Size(29, 21);
            this.label.TabIndex = 52;
            this.label.Text = "ID";
            this.label.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_cus_id
            // 
            this.up_cus_id.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_cus_id.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_cus_id.BackColor = System.Drawing.SystemColors.ControlLight;
            this.up_cus_id.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_cus_id.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_cus_id.Enabled = false;
            this.up_cus_id.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_cus_id.Location = new System.Drawing.Point(1, 76);
            this.up_cus_id.Name = "up_cus_id";
            this.up_cus_id.ReadOnly = true;
            this.up_cus_id.Size = new System.Drawing.Size(119, 23);
            this.up_cus_id.TabIndex = 51;
            // 
            // cUSTOMERBindingSource
            // 
            this.cUSTOMERBindingSource.DataMember = "CUSTOMER";
            this.cUSTOMERBindingSource.DataSource = this.bMASDataSet1;
            // 
            // cUSTOMERTableAdapter
            // 
            this.cUSTOMERTableAdapter.ClearBeforeFill = true;
            // 
            // View_Customer
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.AutoScroll = true;
            this.ClientSize = new System.Drawing.Size(735, 408);
            this.Controls.Add(this.label);
            this.Controls.Add(this.up_cus_id);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.bunifuCustomLabel3);
            this.Controls.Add(this.up_cus_name);
            this.Controls.Add(this.bunifuCustomLabel1);
            this.Controls.Add(this.up_cus_location);
            this.Controls.Add(this.bunifuCustomLabel2);
            this.Controls.Add(this.up_cus_contact);
            this.Controls.Add(this.add_cus);
            this.Controls.Add(this.dataGridView1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "View_Customer";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "View_Customer";
            this.Load += new System.EventHandler(this.View_Customer_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.cUSTOMERBindingSource1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.cUSTOMERBindingSource)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.DataGridView dataGridView1;
        private System.Windows.Forms.Label label1;
        private ns1.BunifuCustomLabel bunifuCustomLabel3;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_cus_name;
        private ns1.BunifuCustomLabel bunifuCustomLabel1;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_cus_location;
        private ns1.BunifuCustomLabel bunifuCustomLabel2;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_cus_contact;
        private System.Windows.Forms.Button add_cus;
        private ns1.BunifuCustomLabel label;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_cus_id;
        private BMASDataSet1 bMASDataSet1;
        private System.Windows.Forms.DataGridViewTextBoxColumn cusIDDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn cusNameDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn cusLocationDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn cusContactNoDataGridViewTextBoxColumn;
        private System.Windows.Forms.BindingSource cUSTOMERBindingSource;
        private System.Windows.Forms.BindingSource cUSTOMERBindingSource1;
        private BMASDataSet1TableAdapters.CUSTOMERTableAdapter cUSTOMERTableAdapter;
    }
}