# 📘 Guia de Contribuição - Projeto [Nome do Projeto]

Este documento descreve o fluxo de trabalho com Git para manter o projeto organizado e facilitar o desenvolvimento colaborativo.

---

## 🧱 Branches principais

- `master`: versão **estável**, pronta para produção.
- `develop`: versão de **desenvolvimento**, onde novas funcionalidades são integradas antes de ir para a `master`.
- `tags-importantes`: **feat/NOME, fix/BUG, chore/CONFIG, hotfix/Corração Urgente em PRD**
---

## 🌿 Criando novas features

Para cada nova funcionalidade ou correção:

1. Certifique-se de estar na `develop`:
   ```bash
   git checkout develop
   git pull origin develop
2. Agora use o comando, para a nova branch vir :
    ```bash
    git checkout -b "nome_branch"
    ```
3. 