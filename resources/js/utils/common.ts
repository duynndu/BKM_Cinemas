import domtoimage from 'dom-to-image';

export const utils = {
  domToImage: async ($element: HTMLElement): Promise<string> => {
    return new Promise((resolve, reject) => {
      domtoimage.toPng($element)
        .then((dataUrl: string) => {
          resolve(dataUrl);
        })
        .catch((error: any) => {
          console.error('dom-to-image failed', error);
          reject(error);
        });
    });
  },

  domToBlob: async ($element: HTMLElement): Promise<Blob> => {
    return new Promise((resolve, reject) => {
      domtoimage.toBlob($element)
        .then((blob: Blob) => {
          resolve(blob);
        })
        .catch((error: any) => {
          console.error('dom-to-image failed', error);
          reject(error);
        });
    });
  },

  dataUrlToBlob: (dataUrl: string): Blob => {
    const byteString = atob(dataUrl.split(',')[1]);
    const mimeString = dataUrl.split(',')[0].split(':')[1].split(';')[0];
    const ab = new ArrayBuffer(byteString.length);
    const ia = new Uint8Array(ab);

    for (let i = 0; i < byteString.length; i++) {
      ia[i] = byteString.charCodeAt(i);
    }

    return new Blob([ab], { type: mimeString });
  },

  downloadBlob: (blob: Blob, filename: string): void => {
    const url = URL.createObjectURL(blob);
    const link = document.createElement('a');
    link.href = url;
    link.download = filename;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    URL.revokeObjectURL(url);
  }
};
