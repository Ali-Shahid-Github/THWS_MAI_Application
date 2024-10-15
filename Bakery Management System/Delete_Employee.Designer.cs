namespace Bakery_Management_System
{
    partial class Delete_Employee
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
            this.dataGridView2_Del_Emp = new System.Windows.Forms.DataGridView();
            this.empIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.empNameDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.empJoinDateDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.rolIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.eMPLOYEEBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.bMASDataSet1 = new Bakery_Management_System.BMASDataSet1();
            this.eMPLOYEETableAdapter = new Bakery_Management_System.BMASDataSet1TableAdapters.EMPLOYEETableAdapter();
            this.label1 = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView2_Del_Emp)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.eMPLOYEEBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).BeginInit();
            this.SuspendLayout();
            // 
            // dataGridView2_Del_Emp
            // 
            this.dataGridView2_Del_Emp.AllowUserToAddRows = false;
            this.dataGridView2_Del_Emp.AllowUserToDeleteRows = false;
            this.dataGridView2_Del_Emp.AutoGenerateColumns = false;
            this.dataGridView2_Del_Emp.BackgroundColor = System.Drawing.SystemColors.Desktop;
            this.dataGridView2_Del_Emp.BorderStyle = System.Windows.Forms.BorderStyle.None;
            dataGridViewCellStyle1.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle1.BackColor = System.Drawing.SystemColors.MenuHighlight;
            dataGridViewCellStyle1.Font = new System.Drawing.Font("Sitka Display", 10F);
            dataGridViewCellStyle1.ForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.Padding = new System.Windows.Forms.Padding(0, 1, 0, 1);
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle1.SelectionForeColor = System.Drawing.Color.Black;
            dataGridViewCellStyle1.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dataGridView2_Del_Emp.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle1;
            this.dataGridView2_Del_Emp.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView2_Del_Emp.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.empIDDataGridViewTextBoxColumn,
            this.empNameDataGridViewTextBoxColumn,
            this.empJoinDateDataGridViewTextBoxColumn,
            this.rolIDDataGridViewTextBoxColumn});
            this.dataGridView2_Del_Emp.DataSource = this.eMPLOYEEBindingSource;
            dataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.White;
            dataGridViewCellStyle2.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle2.ForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle2.SelectionBackColor = System.Drawing.SystemColors.Highlight;
            dataGridViewCellStyle2.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dataGridView2_Del_Emp.DefaultCellStyle = dataGridViewCellStyle2;
            this.dataGridView2_Del_Emp.EnableHeadersVisualStyles = false;
            this.dataGridView2_Del_Emp.GridColor = System.Drawing.SystemColors.ActiveCaption;
            this.dataGridView2_Del_Emp.Location = new System.Drawing.Point(0, 49);
            this.dataGridView2_Del_Emp.Name = "dataGridView2_Del_Emp";
            this.dataGridView2_Del_Emp.ReadOnly = true;
            this.dataGridView2_Del_Emp.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.Single;
            this.dataGridView2_Del_Emp.Size = new System.Drawing.Size(611, 243);
            this.dataGridView2_Del_Emp.TabIndex = 54;
            this.dataGridView2_Del_Emp.CellMouseDoubleClick += new System.Windows.Forms.DataGridViewCellMouseEventHandler(this.dataGridView2_Del_Emp_CellMouseDoubleClick);
            // 
            // empIDDataGridViewTextBoxColumn
            // 
            this.empIDDataGridViewTextBoxColumn.DataPropertyName = "Emp_ID";
            this.empIDDataGridViewTextBoxColumn.HeaderText = "Emp_ID";
            this.empIDDataGridViewTextBoxColumn.Name = "empIDDataGridViewTextBoxColumn";
            this.empIDDataGridViewTextBoxColumn.ReadOnly = true;
            this.empIDDataGridViewTextBoxColumn.Width = 140;
            // 
            // empNameDataGridViewTextBoxColumn
            // 
            this.empNameDataGridViewTextBoxColumn.DataPropertyName = "Emp_Name";
            this.empNameDataGridViewTextBoxColumn.HeaderText = "Emp_Name";
            this.empNameDataGridViewTextBoxColumn.Name = "empNameDataGridViewTextBoxColumn";
            this.empNameDataGridViewTextBoxColumn.ReadOnly = true;
            this.empNameDataGridViewTextBoxColumn.Width = 140;
            // 
            // empJoinDateDataGridViewTextBoxColumn
            // 
            this.empJoinDateDataGridViewTextBoxColumn.DataPropertyName = "Emp_JoinDate";
            this.empJoinDateDataGridViewTextBoxColumn.HeaderText = "Emp_JoinDate";
            this.empJoinDateDataGridViewTextBoxColumn.Name = "empJoinDateDataGridViewTextBoxColumn";
            this.empJoinDateDataGridViewTextBoxColumn.ReadOnly = true;
            this.empJoinDateDataGridViewTextBoxColumn.Width = 150;
            // 
            // rolIDDataGridViewTextBoxColumn
            // 
            this.rolIDDataGridViewTextBoxColumn.DataPropertyName = "Rol_ID";
            this.rolIDDataGridViewTextBoxColumn.HeaderText = "Rol_ID";
            this.rolIDDataGridViewTextBoxColumn.Name = "rolIDDataGridViewTextBoxColumn";
            this.rolIDDataGridViewTextBoxColumn.ReadOnly = true;
            this.rolIDDataGridViewTextBoxColumn.Width = 140;
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
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label1.Location = new System.Drawing.Point(154, 12);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(240, 22);
            this.label1.TabIndex = 55;
            this.label1.Text = "Double Click on record, to delete";
            // 
            // Delete_Employee
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.AutoScroll = true;
            this.BackColor = System.Drawing.SystemColors.Desktop;
            this.ClientSize = new System.Drawing.Size(614, 296);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.dataGridView2_Del_Emp);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "Delete_Employee";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Delete_Employee";
            this.Load += new System.EventHandler(this.Delete_Employee_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView2_Del_Emp)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.eMPLOYEEBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.DataGridView dataGridView2_Del_Emp;
        private System.Windows.Forms.BindingSource eMPLOYEEBindingSource;
        private BMASDataSet1 bMASDataSet1;
        private BMASDataSet1TableAdapters.EMPLOYEETableAdapter eMPLOYEETableAdapter;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.DataGridViewTextBoxColumn empIDDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn empNameDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn empJoinDateDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn rolIDDataGridViewTextBoxColumn;
    }
}