namespace Bakery_Management_System
{
    partial class View_Employee
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
            this.eMPLOYEEBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.bMASDataSet1 = new Bakery_Management_System.BMASDataSet1();
            this.eMPLOYEETableAdapter = new Bakery_Management_System.BMASDataSet1TableAdapters.EMPLOYEETableAdapter();
            this.add_cus = new System.Windows.Forms.Button();
            this.bunifuCustomLabel2 = new ns1.BunifuCustomLabel();
            this.up_emp_date = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel1 = new ns1.BunifuCustomLabel();
            this.up_emp_name = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel3 = new ns1.BunifuCustomLabel();
            this.dataGridView2_Emp = new System.Windows.Forms.DataGridView();
            this.empIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.empNameDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.empJoinDateDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.rolIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.label = new ns1.BunifuCustomLabel();
            this.label1 = new System.Windows.Forms.Label();
            this.up_emp_id = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.up_employee_Role = new System.Windows.Forms.ComboBox();
            ((System.ComponentModel.ISupportInitialize)(this.eMPLOYEEBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView2_Emp)).BeginInit();
            this.SuspendLayout();
            // 
            // eMPLOYEEBindingSource
            // 
            this.eMPLOYEEBindingSource.DataMember = "EMPLOYEE";
            this.eMPLOYEEBindingSource.DataSource = this.bMASDataSet1;
            // 
            // bMASDataSet1
            // 
            this.bMASDataSet1.DataSetName = "BMASDataSet1";
            this.bMASDataSet1.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // eMPLOYEETableAdapter
            // 
            this.eMPLOYEETableAdapter.ClearBeforeFill = true;
            // 
            // add_cus
            // 
            this.add_cus.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.add_cus.DialogResult = System.Windows.Forms.DialogResult.OK;
            this.add_cus.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.add_cus.Location = new System.Drawing.Point(1, 330);
            this.add_cus.Name = "add_cus";
            this.add_cus.Size = new System.Drawing.Size(119, 23);
            this.add_cus.TabIndex = 57;
            this.add_cus.Text = "Update";
            this.add_cus.UseVisualStyleBackColor = false;
            this.add_cus.Click += new System.EventHandler(this.add_cus_Click);
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
            this.bunifuCustomLabel2.Size = new System.Drawing.Size(70, 21);
            this.bunifuCustomLabel2.TabIndex = 59;
            this.bunifuCustomLabel2.Text = "Role ID";
            this.bunifuCustomLabel2.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_emp_date
            // 
            this.up_emp_date.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_emp_date.BackColor = System.Drawing.SystemColors.Control;
            this.up_emp_date.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_emp_date.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_emp_date.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_emp_date.Location = new System.Drawing.Point(1, 215);
            this.up_emp_date.Name = "up_emp_date";
            this.up_emp_date.ReadOnly = true;
            this.up_emp_date.Size = new System.Drawing.Size(93, 23);
            this.up_emp_date.TabIndex = 55;
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
            this.bunifuCustomLabel1.Size = new System.Drawing.Size(89, 21);
            this.bunifuCustomLabel1.TabIndex = 58;
            this.bunifuCustomLabel1.Text = "Join_Date";
            this.bunifuCustomLabel1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // up_emp_name
            // 
            this.up_emp_name.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_emp_name.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_emp_name.BackColor = System.Drawing.SystemColors.Control;
            this.up_emp_name.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_emp_name.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_emp_name.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_emp_name.Location = new System.Drawing.Point(1, 142);
            this.up_emp_name.Name = "up_emp_name";
            this.up_emp_name.Size = new System.Drawing.Size(93, 23);
            this.up_emp_name.TabIndex = 54;
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
            this.bunifuCustomLabel3.TabIndex = 60;
            this.bunifuCustomLabel3.Text = "Name";
            this.bunifuCustomLabel3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // dataGridView2_Emp
            // 
            this.dataGridView2_Emp.AllowUserToAddRows = false;
            this.dataGridView2_Emp.AllowUserToDeleteRows = false;
            this.dataGridView2_Emp.AutoGenerateColumns = false;
            this.dataGridView2_Emp.BackgroundColor = System.Drawing.SystemColors.Desktop;
            this.dataGridView2_Emp.BorderStyle = System.Windows.Forms.BorderStyle.None;
            dataGridViewCellStyle1.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle1.BackColor = System.Drawing.SystemColors.MenuHighlight;
            dataGridViewCellStyle1.Font = new System.Drawing.Font("Sitka Display", 10F);
            dataGridViewCellStyle1.ForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.Padding = new System.Windows.Forms.Padding(0, 1, 0, 1);
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle1.SelectionForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dataGridView2_Emp.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle1;
            this.dataGridView2_Emp.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView2_Emp.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.empIDDataGridViewTextBoxColumn,
            this.empNameDataGridViewTextBoxColumn,
            this.empJoinDateDataGridViewTextBoxColumn,
            this.rolIDDataGridViewTextBoxColumn});
            this.dataGridView2_Emp.DataSource = this.eMPLOYEEBindingSource;
            dataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.White;
            dataGridViewCellStyle2.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle2.ForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle2.SelectionBackColor = System.Drawing.SystemColors.Highlight;
            dataGridViewCellStyle2.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dataGridView2_Emp.DefaultCellStyle = dataGridViewCellStyle2;
            this.dataGridView2_Emp.EnableHeadersVisualStyles = false;
            this.dataGridView2_Emp.GridColor = System.Drawing.SystemColors.ActiveCaption;
            this.dataGridView2_Emp.Location = new System.Drawing.Point(126, 0);
            this.dataGridView2_Emp.Name = "dataGridView2_Emp";
            this.dataGridView2_Emp.ReadOnly = true;
            this.dataGridView2_Emp.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.Single;
            this.dataGridView2_Emp.Size = new System.Drawing.Size(552, 408);
            this.dataGridView2_Emp.TabIndex = 53;
            this.dataGridView2_Emp.RowEnter += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView2_Emp_RowEnter);
            // 
            // empIDDataGridViewTextBoxColumn
            // 
            this.empIDDataGridViewTextBoxColumn.DataPropertyName = "Emp_ID";
            this.empIDDataGridViewTextBoxColumn.HeaderText = "Emp_ID";
            this.empIDDataGridViewTextBoxColumn.Name = "empIDDataGridViewTextBoxColumn";
            this.empIDDataGridViewTextBoxColumn.ReadOnly = true;
            this.empIDDataGridViewTextBoxColumn.Width = 130;
            // 
            // empNameDataGridViewTextBoxColumn
            // 
            this.empNameDataGridViewTextBoxColumn.DataPropertyName = "Emp_Name";
            this.empNameDataGridViewTextBoxColumn.HeaderText = "Emp_Name";
            this.empNameDataGridViewTextBoxColumn.Name = "empNameDataGridViewTextBoxColumn";
            this.empNameDataGridViewTextBoxColumn.ReadOnly = true;
            this.empNameDataGridViewTextBoxColumn.Width = 120;
            // 
            // empJoinDateDataGridViewTextBoxColumn
            // 
            this.empJoinDateDataGridViewTextBoxColumn.DataPropertyName = "Emp_JoinDate";
            this.empJoinDateDataGridViewTextBoxColumn.HeaderText = "Emp_JoinDate";
            this.empJoinDateDataGridViewTextBoxColumn.Name = "empJoinDateDataGridViewTextBoxColumn";
            this.empJoinDateDataGridViewTextBoxColumn.ReadOnly = true;
            this.empJoinDateDataGridViewTextBoxColumn.Width = 130;
            // 
            // rolIDDataGridViewTextBoxColumn
            // 
            this.rolIDDataGridViewTextBoxColumn.DataPropertyName = "Rol_ID";
            this.rolIDDataGridViewTextBoxColumn.HeaderText = "Rol_ID";
            this.rolIDDataGridViewTextBoxColumn.Name = "rolIDDataGridViewTextBoxColumn";
            this.rolIDDataGridViewTextBoxColumn.ReadOnly = true;
            this.rolIDDataGridViewTextBoxColumn.Width = 130;
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
            this.label.TabIndex = 63;
            this.label.Text = "ID";
            this.label.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
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
            this.label1.TabIndex = 61;
            this.label1.Text = "Update";
            // 
            // up_emp_id
            // 
            this.up_emp_id.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.up_emp_id.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.up_emp_id.BackColor = System.Drawing.SystemColors.ControlLight;
            this.up_emp_id.BorderColor = System.Drawing.Color.SeaGreen;
            this.up_emp_id.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.up_emp_id.Enabled = false;
            this.up_emp_id.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.up_emp_id.Location = new System.Drawing.Point(1, 76);
            this.up_emp_id.Name = "up_emp_id";
            this.up_emp_id.ReadOnly = true;
            this.up_emp_id.Size = new System.Drawing.Size(93, 23);
            this.up_emp_id.TabIndex = 62;
            // 
            // up_employee_Role
            // 
            this.up_employee_Role.BackColor = System.Drawing.SystemColors.Control;
            this.up_employee_Role.FormattingEnabled = true;
            this.up_employee_Role.Location = new System.Drawing.Point(1, 290);
            this.up_employee_Role.Name = "up_employee_Role";
            this.up_employee_Role.Size = new System.Drawing.Size(89, 21);
            this.up_employee_Role.TabIndex = 64;
            // 
            // View_Employee
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(678, 408);
            this.Controls.Add(this.up_employee_Role);
            this.Controls.Add(this.label);
            this.Controls.Add(this.up_emp_id);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.bunifuCustomLabel3);
            this.Controls.Add(this.up_emp_name);
            this.Controls.Add(this.bunifuCustomLabel1);
            this.Controls.Add(this.up_emp_date);
            this.Controls.Add(this.bunifuCustomLabel2);
            this.Controls.Add(this.add_cus);
            this.Controls.Add(this.dataGridView2_Emp);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "View_Employee";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "View_Employee";
            this.Load += new System.EventHandler(this.View_Employee_Load);
            ((System.ComponentModel.ISupportInitialize)(this.eMPLOYEEBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView2_Emp)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.BindingSource eMPLOYEEBindingSource;
        private BMASDataSet1TableAdapters.EMPLOYEETableAdapter eMPLOYEETableAdapter;
        private BMASDataSet1 bMASDataSet1;
        private System.Windows.Forms.Button add_cus;
        private ns1.BunifuCustomLabel bunifuCustomLabel2;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_emp_date;
        private ns1.BunifuCustomLabel bunifuCustomLabel1;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_emp_name;
        private ns1.BunifuCustomLabel bunifuCustomLabel3;
        private System.Windows.Forms.DataGridView dataGridView2_Emp;
        private System.Windows.Forms.DataGridViewTextBoxColumn empIDDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn empNameDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn empJoinDateDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn rolIDDataGridViewTextBoxColumn;
        private ns1.BunifuCustomLabel label;
        private System.Windows.Forms.Label label1;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox up_emp_id;
        private System.Windows.Forms.ComboBox up_employee_Role;
    }
}