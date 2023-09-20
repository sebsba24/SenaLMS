<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //? Migracion de tabla roles
        $roles = [
            [
                'name' => 'Instructor'
            ],
            [
                'name' => 'Aprendiz'
            ]
        ];
        foreach ($roles as $roleData) {
            \App\Models\Role::factory()->create($roleData);
        }

        //? Migracion de tabla users
        $users = [
            [
                'name' => 'Sebs',
                'last_name' => 'Barragan',
                'email' => 'sebs@example.com',
                'password' => bcrypt('12345678'),
                'role_id' => 1
            ],
            [
                'name' => 'Juan',
                'last_name' => 'Basto',
                'email' => 'juan@example.com',
                'password' => bcrypt('12345678'),
                'role_id' => 1
            ],
            [
                'name' => 'Diego',
                'last_name' => 'Bom',
                'email' => 'diego@example.com',
                'password' => bcrypt('12345678'),
                'role_id' => 2
            ],
            [
                'name' => 'Nicolas',
                'last_name' => 'Melo',
                'email' => 'nic@example.com',
                'password' => bcrypt('12345678'),
                'role_id' => 2
            ]
        ];
        foreach ($users as $userData) {
            \App\Models\User::factory()->create($userData);
        }

        //? Migracion de table coordinations

        $coordi = [
            [
                'name' => 'UTI'
            ],
            [
                'name' => 'Banca'
            ]
        ];
        foreach ($coordi as $coordiData) {
            \App\Models\Coordination::factory()->create($coordiData);
        }

        //?Migracion de tabla instructors
        $instructors = [
            [
                'user_id' => 1,
                'coordination_id' => 1
            ],
            [
                'user_id' => 2,
                'coordination_id' => 2
            ]
        ];
        foreach ($instructors as $instructorData) {
            \App\Models\Instructor::factory()->create($instructorData);
        }

        //?Migracion tabla de programas
        $programs = [
            [
                'name' => 'Analisis y desarrollo de software',
                'coordination_id' => 1,
                'type' => 'tecnologo',
                'code' => 22222
            ],
            [
                'name' => 'Gestion Administratica',
                'coordination_id' => 2,
                'type' => 'tecnico',
                'code' => 22222
            ]
        ];
        foreach ($programs as $programData) {
            \App\Models\Program::factory()->create($programData);
        }

        //?Migracion de tabla phases
        $phases = [
            [
                'name' => 'Fase 1'
            ],
            [
                'name' => 'Fase 2'
            ],
            [
                'name' => 'Fase 3'
            ],
            [
                'name' => 'Fase 4'
            ],
            [
                'name' => 'Fase 4a'
            ],
            [
                'name' => 'Fase 5'
            ],
        ];
        foreach ($phases as $phaseData) {
            \App\Models\Phase::factory()->create($phaseData);
        }

        //?Migracion de tabla study sheets
        $studySheets = [
            [
                'number' => 2397178,
                'start_date' => 2021 - 10 - 04,
                'end_date' => 2023 - 10 - 03,
                'state' => true,
                'phase_id' => 6,
                'program_id' => 1,
            ],
            [
                'number' => 2397180,
                'start_date' => 2021 - 10 - 04,
                'end_date' => 2023 - 10 - 03,
                'state' => true,
                'phase_id' => 6,
                'program_id' => 1,
            ],
            [
                'number' => 3204142,
                'start_date' => 2022 - 01 - 04,
                'end_date' => 2024 - 01 - 03,
                'state' => true,
                'phase_id' => 4,
                'program_id' => 2,
            ],
            [
                'number' => 3204180,
                'start_date' => 2022 - 01 - 04,
                'end_date' => 2024 - 01 - 03,
                'state' => true,
                'phase_id' => 5,
                'program_id' => 2,
            ],
        ];
        foreach ($studySheets as $studySheetsData) {
            \App\Models\StudySheet::factory()->create($studySheetsData);
        }

        //?Migracion de tabla students
        $students = [
            [
                'user_id' => 3,
                'study_sheet_id' => 1,
            ],
            [
                'user_id' => 4,
                'study_sheet_id' => 3,
            ],
        ];
        foreach ($students as $studentData) {
            \App\Models\Student::factory()->create($studentData);
        }

        //?Migracion de tabla components
        $components = [
            [
                'name' => 'java 1',
                'phase_id' => 2,
                'program_id' => 1
            ],
            [
                'name' => 'python',
                'phase_id' => 2,
                'program_id' => 1
            ],
            [
                'name' => 'nomina',
                'phase_id' => 2,
                'program_id' => 1
            ],
            [
                'name' => 'redaccion',
                'phase_id' => 2,
                'program_id' => 1
            ],
        ];
        foreach ($components as $componentData) {
            \App\Models\Component::factory()->create($componentData);
        }

        //?Migracion de tabla competences
        $competences = [
            [
                'name' => 'ANALIZAR LOS REQUISITOS DEL CLIENTE PARA CONSTRUIR EL SISTEMA DE INFORMACION.',
                'component_id' => 1,
                'code' => 23
            ],
            [
                'name' => 'APLICAR BUENAS PRÁCTICAS DE CALIDAD EN EL PROCESO DE DESARROLLO DE SOFTWARE, DE ACUERDO CON EL REFERENTE ADOPTADO EN LA EMPRESA.',
                'component_id' => 2,
                'code' => 24
            ],
            [
                'name' => 'COMPRENDER TEXTOS EN INGLÉS EN FORMA ESCRITA Y AUDITIVA',
                'component_id' => 3,
                'code' => 32
            ],
            [
                'name' => 'CONSTRUIR EL SISTEMA QUE CUMPLA CON LOS REQUISITOS DE LA SOLUCIÓN INFORMÁTICA.',
                'component_id' => 4,
                'code' => 33
            ],
        ];
        foreach ($competences as $competenceData) {
            \App\Models\Competence::factory()->create($competenceData);
        }


        //?Migracion de tabla learning achivements
        $learningAchivements = [
            [
                'name' => 'ELABORAR EL INFORME DE LOS RESULTADOS DEL ANÁLISIS DEL SISTEMA DEINFORMACIÓN, DE ACUERDO CON LOS REQUERIMIENTOS DEL CLIENTE SEGÚNNORMAS Y PROTOCOLOS ESTABLECIDOS.',
                'competence_id' => 1,
                'code' => 55
            ],
            [
                'name' => 'ELABORAR INSTRUMENTOS E INSTRUCTIVOS, REQUERIDOS POR EL ASEGURAMIENTODE LA CALIDAD, PARA DOCUMENTAR Y EVALUAR LOS PROCESOS DE DESARROLLO DESOFTWARE, DE ACUERDO CON LAS NORMAS Y PROCEDIMIENTOS ESTABLECIDASPOR LA EMPRESA',
                'competence_id' => 2,
                'code' => 56
            ],
            [
                'name' => 'COMPRENDER LA IDEA PRINCIPAL EN AVISOS Y MENSAJES BREVES, CLAROS Y SENCILLOS EN INGLÉS TÉCNICO',
                'competence_id' => 3,
                'code' => 60
            ],
            [
                'name' => 'EJECUTAR Y DOCUMENTAR LAS PRUEBAS DEL SOFTWARE, APLICANDO TÉCNICAS DEENSAYO-ERROR, DE ACUERDO CON EL PLAN DISEÑADO Y LOS PROCEDIMIENTOSESTABLECIDOS POR LA EMPRESA',
                'competence_id' => 4,
                'code' => 61
            ],
        ];
        foreach ($learningAchivements as $learningAchivementData) {
            \App\Models\LearningAchivement::factory()->create($learningAchivementData);
        }

        //?Migracion de tabla evidences
        $evidences = [
            [
                'title' => 'Trabajo chevere',
                'description' => 'Envia',
                'file' => 'ruta',
                'activation_date' => null,
                'due_date' => 2023-09-20,
                'learning_achievement_id' => 1,
                'instructor_id' => 1,
            ],
            [
                'title' => 'Trabajo no tan chevere',
                'description' => 'Evidencia 1',
                'file' => 'ruta',
                'activation_date' => null,
                'due_date' => 2023-10-04,
                'learning_achievement_id' => 2,
                'instructor_id' => 2,
            ],
        ];
        foreach ($evidences as $evidenceData) {
            \App\Models\Evidence::factory()->create($evidenceData);
        }
    }
}